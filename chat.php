<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'little_library');

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['s_name'];
    $message = $_POST['message'];

    if (!empty($name) && !empty($message)) {
        $query = "INSERT INTO chat_messages (s_name, message) VALUES (?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('ss', $name, $message);
        $stmt->execute();
        $stmt->close();

        if (!isset($_SESSION['s_name'])) {
            $_SESSION['s_name'] = $name; // Store the user's name in the session after the first submission
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chat System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700&display=swap" rel="stylesheet">
    <style>
         body {
            background-color: #f2f2f2;
        }

        .upload-section {
            background-color: whitesmoke;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
            padding-right: 100px;
        }

        .video-section {
            background-color: lightgrey;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
           
        }

        .card {
            transition: box-shadow 0.3s ease-in-out;
            border: none;
            background-color: transparent;
        }

        .card-thumbnail {
            position: relative;
            overflow: hidden;
            padding-top: 56.25%; /* 16:9 aspect ratio for responsive thumbnail */
        }

        .card-thumbnail img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-thumbnail .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 40px;
            opacity: 0.8;
            transition: opacity 0.3s ease-in-out;
        }

        .card-thumbnail .play-btn:hover {
            opacity: 1;
        }

        .card-video {
            width: 100%;
            height: auto;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .upload-form .custom-file-upload {
            display: inline-block;
            padding: 8px 12px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .upload-form .custom-file-upload:hover {
            background-color: #0056b3;
        }

        .menu{
  width: 100px;
  float: left;
  height: 70px;
  text-decoration: none;
  
}

ul{
  float: left;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-left: -45px;
  width: max-content;
  text-decoration: none;
}

.logo{
  color: #ff7200;
  font-size: 35px;
  font-family: Arial;
  padding-left: 20px;
  float: left;
  padding-top: 10px;
  margin-top: 5px;
  
}
.uiu_logo{
  width: 200px;
  float: left;
  height: 70px;
  padding-top: 12px;
 padding-left: 20px;
}



ul li{
  list-style: none;
  margin-left: 62px;
  margin-top: 27px;
  font-size: 14px;
  text-decoration: none;
  text-align: center;
}

ul li a{
  text-decoration: none;
  color: #fff;
  font-family: Arial;
  font-weight: bold;
  transition: 0.4s ease-in-out;
}

ul li a:hover{
  color: #ff7200;
  text-decoration: none;
}

body {
    min-height: 100vh;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(../Little_Library/image/uiub.jpg);
    display: flex;
    justify-content: center;
    align-items: center;
    background-size: cover;

    
}



.navbar{
  width: 1200px;
  height: 75px;
  margin: auto;
  text-decoration: none;
  padding-right: 120px;
}
.chat-message {
            margin: 10px 0;
            padding: 10px;
            border-radius: 10px;
            background-color: #f0f0f0;
             

        }

        .message-time {
            color: #999;
            font-size: 12px;
        }

        h1{
            padding-left: 100px;
            padding-top: 15px;
            padding-right: 100px;
        }

        .container{
             padding-left: 100px;
             padding-bottom: 10px;
             padding-right: 100px;
        }

        .abc{
    background-color: #fff5;

backdrop-filter: blur(7px);
box-shadow: 0 .4rem .8rem #0005;
border-radius: .8rem;
margin-top: 40px;
margin-right: 20px;
margin-left: 20px;
margin-bottom: 40px;
 
 

}

.information span {
      display: block;
      margin: 5px 0 5px;
      padding: 2px 10px;
      border: 2px solid #DF6E31;
      background-color: rgba(242, 242, 242, 0.8);
      color: #333;
      font-size: 13px;
      font-weight: bold;
      border-radius: 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .information span:hover {
      background-color: #FF7200;
    }

    .open{
     flex-basis: calc((100% -90px) / 5);
  /* border: 2px solid #DF6E31; */
  padding: 10px;
  
  color: #F2F2F2;
  text-align: left;
  background-color: transparent;
  margin-top: 40px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  margin-bottom: 30px;
  color:black

   }

   
    </style>
</head>
<body>
<div>
    <nav class="navbar">
<div class="icon">
                <div class="uiu_logo">
                  <img src="..//Little_Library/image/uiu logo.png" height="70px" width="70px" >
                </div>           
            </div>
            

        <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="posts.php">Post</a></li>
                <li><a href="video1.php">Video</a></li>
                <li><a href="course_table.php">Course List</a></li>
                <li><a href="stdnProfile.php">Problems</a></li>
               
                <li><a href="sProfile.php">My Profile</a></li>
                
                <li><a href="sLogout.php">Log out</a></li>

            <!-- Add more navigation items here -->
        </ul>
    </nav>
    <div class="open">
    <div class="overlay"></div>

    <h1 class="text-center fw-bold"  ><a href="#" class="text-decoration-none text-white" >USM CHAT MANAGER</a></h1>
<div class="abc" style="#">
    <div  class="information " style="#">
    <div class="container" style="#" >
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="card chat-messages">
                    <div class="card-body" id="chat-messages">
                        <!-- Chat messages will be dynamically loaded here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="chat-form">
                    <form id="chat-form" class="needs-validation" novalidate>
                        <div class="form-group">
                            <label style="color: blue;">Name:</label>
                            <input type="text" id="s_name" class="form-control" value="<?php echo isset($_SESSION['s_name']) ? htmlspecialchars($_SESSION['s_name']) : ''; ?>" <?php echo isset($_SESSION['s_name']) ? 'readonly' : ''; ?> required>
                            <div class="invalid-feedback">
                                Please enter your name.
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="color: blue;">Message:</label>
                            <textarea id="message" class="form-control" required></textarea>
                            <div class="invalid-feedback">
                                Please enter a message.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function updateChat() {
            const chatMessages = document.getElementById('chat-messages');
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'fetch_messages.php', true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    const messages = JSON.parse(xhr.responseText);
                    chatMessages.innerHTML = '';
                    messages.forEach(function (message) {
                        const messageElement = document.createElement('div');
                        messageElement.className = 'chat-message';
                        messageElement.innerHTML = `
                            <strong>${message.name}</strong><span class="message-time ml-2">${message.timestamp}</span>
                            <p>${message.message}</p>
                        `;
                      chatMessages.insertBefore(messageElement, chatMessages.firstChild);

                    });
                }
            };
            xhr.send();
        }

        setInterval(updateChat, 2000);
        updateChat();

        const chatForm = document.getElementById('chat-form');
        chatForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const nameInput = document.getElementById('s_name');
            const messageInput = document.getElementById('message');

            const name = nameInput.value.trim();
            const message = messageInput.value.trim();

            if (name !== '' && message !== '') {
                const xhr = new XMLHttpRequest();
                xhr.open('POST', '<?php echo $_SERVER['PHP_SELF']; ?>', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                        messageInput.value = '';
                        updateChat();
                    }
                };
                xhr.send('s_name=' + encodeURIComponent(name) + '&message=' + encodeURIComponent(message));
            }
        });
    </script>
</body>
</html>
