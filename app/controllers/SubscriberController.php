<?php

class SubscriberController extends Controller
{

    public function backToComingSoon()
    {
        header('Location: ' . URLROOT);
    }

    public function add()
    {
        //If no post request, redirect to comingSoon
        if (!isset($_POST['fname'])) {
            $_SESSION['err'] = 'All fields should be filled';
            $this->backToComingSoon();
        }

        //If no file is provided by subscriber form should not be sumited and redirect to comingSoon
        if ($_FILES['image']['size'] == 0) {
            $_SESSION['err'] = 'Image field should not be empty';
            $this->backToComingSoon();
        }


        $target_dir = "subscribers/";
        $newName =  date('Y-m-d_H-i-s') . '_' . $_POST['lname'] . '-' . $_POST['fname'];

        // check the extension of the uploaded file
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

        //create unique file name for each subscriber image file
        $target_file = $target_dir . $newName . '.' . $ext;

        //set allowed file type to be submit
        $allowFileType = array('png', 'jpg', 'jpeg');

        //if the file extension is not allowed redirect to main
        if (!in_array($ext, $allowFileType)) {
            $_SESSION['err'] = 'Image is not valid only (png, jpg and jpeg)';
            $this->backToComingSoon();
        }

        //try to move uploaded file to assignment directory and then add data to database
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $subscriberForm = array(
                'fname' => $_POST['fname'],
                'lname' => $_POST['lname'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'birthdate' => $_POST['birthdate'],
                'country' => $_POST['country'],
                'image' => $target_file
            );

            $subscriberModel = $this->model('Subscriber');

            if ($subscriberModel->add($subscriberForm)) {
                $_SESSION['success'] = true;
                $_SESSION['subscriber'] = $subscriberForm;
                $this->backToComingSoon();
            }
        }
    }
}
