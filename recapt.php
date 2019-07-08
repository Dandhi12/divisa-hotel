$captcha = $_POST['g-recaptcha-response'];
    if (!$captcha) {
      echo 'Please check the captcha form.';
    } else {
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeViasUAAAAAA9WWsgKu1OKA2KXLb7Dan8OQG1Q+++&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
      if ($response.success != true) {
        echo 'You are spammer ! Get the @$%K out!!';
      } else {
        echo 'Congrat! You are not spammer.'
        // Return your proccess code form here.
      }
    }