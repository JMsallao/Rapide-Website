		<div class="col-lg-8" style="float:none;margin:auto;">

		    <div>
		        <div class="panel panel-default" style="height: 400px; margin-bottom: 0px">
		            <div style="height:10px;"></div>
		            <span style="margin-left:10px;font-size:18px">Welcome to Chatroom</span><br>
		            <span style="font-size:16px; margin-left:10px;"><i>Note: Avoid using foul language and hate speech to
		                    avoid banning of account</i></span>
		            <div style="height:10px;"></div>
		            <div id="chat_area" style="margin-left:10px; max-height:320px; overflow-y:scroll;">
		            </div>
		        </div>

		        <div class="input-group">
		            <input type="text" class="form-control" placeholder="Type message..." id="chat_msg" style="height:50px;">
		            <span class="input-group-btn">
		                <button class="btn btn-success" type="submit" id="send_msg" value="<?php echo $id; ?>"
		                    style="height:50px;">
		                    <span class="glyphicon glyphicon-comment"></span> Send
		                </button>
		            </span>
		        </div>

		    </div>
		</div>
		<script>
$(document).ready(function() {
    setInterval(function() {
        displayChat();
    }, 750)
})
		</script>