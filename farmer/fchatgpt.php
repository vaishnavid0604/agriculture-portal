<?php
include ('fsession.php');
ini_set('memory_limit', '-1');

if(!isset($_SESSION['farmer_login_user'])){
header("location: ../index.php");} // Redirecting To Home Page
$query4 = "SELECT * from farmerlogin where email='$user_check'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['farmer_id'];
              $para2 = $row4['farmer_name'];
			  
?>

<!DOCTYPE html>
<html>
<?php require ('fheader.php');  ?>
 <style>

.chat-box {
  height: 59vh; 
  overflow-y: scroll;
}


		.message {
			margin-bottom: 10px;
			padding: 10px;
			padding-bottom: 0;
			border-radius: 10px;
			display: inline-block;
			max-width: 90%;
		
			
			word-wrap: break-word;
			white-space: normal;
		}

		.left-side {
			background-color: lightgray;
			float: left;
		}

		.right-side {
			background-color: lightgreen;
			float: right;
		}
				
 </style>
  <body class="bg-white" id="top">
  
<?php include ('fnav.php');  ?>
 	
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 shape-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
<!-- ======================================================================================================================================== -->


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 ">
			
				<div class="card text-white bg-gradient-white mt--6">
				
				  <div class="card-header bg-gradient-secondary">
				  <span class=" text-default display-4" ><img src="../assets/img/chatgpt.svg" class=" rounded-circle img-fluid" width=""> Chat Bot </span> 	
						<span class="text-right">
							<button class="btn btn-danger float-right" onclick="clearContent()">Clear Chat</button>
						</span>				  
				  </div>

				  
				<div class="card-body chat-box rounded p1" id="chatbox" >		</div>
							
							 <div class="card-footer bg-gradient-secondary">
                                <div class="form-group row">
                                    <div class="col-md-10 mb-1">
                                        <input id="userInput" type="text" class="form-control text-dark"
                                            placeholder="Type your message here..." />
                                    </div>

                                    <div class="col-md-2">
                                        <input id="sendButton" type="button" value="SUBMIT" class=" form-control btn btn-success btn-block" />
                                    </div>
                                </div>
                            </div>
							
	 </div>

    </div>
       </div>
	</div>
		
</section>

    <?php require("footer.php");?>
<script>
function clearContent(){
    document.getElementById('chatbox').innerHTML = '';
}
	
const url = new URL(window.location.href);
const apiKey = "sk-xxxxxxx";   // Enter your apikey here
const chatbox = $("#chatbox");
const userInput = $("#userInput");
const sendButton = $("#sendButton");
let messages = [];

sendButton.on("click", () => {
    const message = userInput.val();
    if (message) {
        messages.push({
            "role": "user",
            "content": message
        });
		const displaytext = window.markdownit().render(message);
		let userMessageHtml = '<pre><div class="message right-side "  >' + displaytext + '</div></pre>';
		chatbox.append(userMessageHtml);
		chatbox.animate({ scrollTop: 20000000 }, "slow");
        userInput.val("");
        sendButton.val("Generating Response...");
		sendButton.prop("disabled", true);
        fetchMessages();
    }
});


userInput.on("keydown", (event) => {
    if (event.keyCode === 13 && !event.ctrlKey && !event.shiftKey) {
        event.preventDefault();
        sendButton.click();
    } else if (event.keyCode === 13 && (event.ctrlKey || event.shiftKey)) {
        event.preventDefault();
        const cursorPosition = userInput.prop("selectionStart");
        const currentValue = userInput.val();

        userInput.val(
            currentValue.slice(0, cursorPosition) +
            "\n" +
            currentValue.slice(cursorPosition)
        );
        userInput.prop("selectionStart", cursorPosition + 1);

        userInput.prop("selectionEnd", cursorPosition + 1);
    }
});

function fetchMessages() {
    try {
        var settings = {
            url: "https://api.openai.com/v1/chat/completions",
            method: "POST",
            timeout: 0,
            headers: {
                Authorization: "Bearer " + apiKey,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                model: "gpt-3.5-turbo",
                messages: messages
            })
        };
        $.ajax(settings).done(function(response) {
            const message = response.choices[0].message;
            messages.push({
                "role": message.role,
                "content": message.content
            });
			const htmlText = window.markdownit().render(message.content);
			const botMessageHtml = '<pre><div class="message left-side " >' + htmlText + '</div></pre>';
            chatbox.append(botMessageHtml);		
			chatbox.animate({ scrollTop: 20000000 }, "slow");
            sendButton.val("SUBMIT");
            sendButton.prop("disabled", false);
        }).fail(function(jqXHR, textStatus, errorThrown) {
            sendButton.val("Error");
			let errorMessage = '<pre><div class="message left-side  text-danger" >' + text('Please provide chatGPT apiKey and try again.') + '</div></pre>';
            chatbox.append(errorMessage);
			chatbox.animate({ scrollTop: 20000000 }, "slow");
        });
    } catch (error) {
        sendButton.val("Error");
		let errorMessage2 = '<pre><div class="message left-side  text-danger" >' + text('Please provide chatGPT apiKey and try again.') + '</div></pre>';
            chatbox.append(errorMessage2);
			chatbox.animate({ scrollTop: 20000000 }, "slow");
    }
}
 </script>
  
</body>
</html>