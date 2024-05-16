<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Test Interface</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style/styles.css">
    <style>
       .answer-half-width{
    overflow-wrap: scroll;
    font-size: larger;
    line-height: 30px;
}
.sessionFooter{
    display: flex;
    justify-content: space-between;
    background-color: #21859c;
}
.endSession{
    display: flex;
    margin: 20px;
    padding-right: 10px;
    margin-left: 10px;
    padding-right: 10px;
    margin-right: 2px;
    cursor: pointer;
}
.suspend{
    display: flex;
    margin: 20px;
    cursor: pointer;
}
.suspend i {
    margin-left: 0;
}
i{
    margin-right: 10px;
}
.session_holder_first{
    display: flex;
    width: 100%;
   
}
.session_holder_second{
    display: flex;
    justify-content: end;
}
.answer-half-width p{
    cursor: nwse-resize;
}
.left-options li{
    display: flex;
    justify-content: space-between;
}
.right-options li{
    display: flex;
    justify-content: space-between;
}
.right-options li {
 margin: 10px;
}
.pre_btn, .navig_end, .next_btn{
    display: flex;
    margin: 20px;
    padding-right: 10px;
    margin-left: 5px;
    margin-right: 5px;
    cursor: pointer;
}
.pre_btn i, .navig_end i, .next_btn i {
margin-right: 10px;

}
.poz-fix {
    position: fixed;
    width: 100%;
    justify-content: space-between;
    align-items: center;
}
.poz-abs{
    position: relative;
    top: 20%;
}

    </style>
</head>

<body>
    <header>
        <!-- Navigation Bar 1 -->
        <nav id="topbar" class="nav-1 poz-fix">
            <!-- Test details, user id, login id, etc. -->
            <ul>
                <li>Tests Name: <span>[Tests Name]</span></li>
                <li>User ID: <span>[User ID]</span></li>
                <li>Login ID: <span>[Login ID]</span></li>
                <li>Topics: <span>[Topics]</span></li>
                <li>Modules: <span>[Modules]</span></li>
            </ul>
            <ul class="fontManager">
                <li> Time: <span> 00 <sup> min </sup> :00 <sup> sec </sup> :00 <sup> milSec </sup> </span></li>
                <li>Question: <span> 00 / 100 </span></li>
            </ul>
        </nav>
        <!-- Navigation Bar 2 -->
        <nav class="nav-2 poz-abs">
            <!-- Calculator, notes, feedback, settings, contact, etc. -->
            <ul class="left-options">
                <li>
                    <p>Calculator</p><i class="fas fa-calculator"></i>
                </li>
                <li>
                    <p>Notes</p><i class="fas fa-sticky-note"></i>
                </li>
                <li>
                    <p>feedBack</p><i class="fas fa-comment-alt"></i>
                </li>
            </ul>
            <ul class="right-options">
                <li><i class="fas fa-cog"></i></li>
                <li><i class="fas fa-envelope"></i></li>
                <li><a href="tel:+977 9808092946"><i class="fas fa-phone"></i></a></li>
                <li><i class="fas fa-camera"></i></li>
                <li><i class="fas fa-sign-out-alt"></i></li>
                <li><i class="fas fa-question-circle"></i></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="question">
            <div class="question-half-width">
                <h2>The nurse is performing open endotracheal suctioning for a client with a tracheostomy tube. Which of the following actions by the nurse are appropriate?<span class="typeOfQNA"> Select all that apply.</span></h2>
                <ul class="options">
                    <li><input type="checkbox" id="option1">
                        <labe for="option1">Administers 100% oxygen prior to suctioning the client</label>
                    </li>
                    <li><input type="checkbox" id="option2"> <label for="option2">Applies suction while withdrawing the catheter from the airway</label></li>
                    <li><input type="checkbox" id="option3"> <label for="option3">Instills sterile normal saline into the tracheostomy prior to suctioning</label></li>
                    <li><input type="checkbox" id="option4"> <label for="option4">Limits suctioning to 20 seconds during each suction pass</label></li>
                    <li><input type="checkbox" id="option5"> <label for="option5">Uses sterile gloves and technique throughout the procedure</label></li>
                </ul>
            </div>
            <div class="answer-half-width">
                <h3>Explanation</h3>
                <h5>Incorrect Answer</h5>
                <p><span class="correct">Administers 100% oxygen prior to suctioning the client</span>: Preoxygenate with 100% oxygen to reduce the risk of hypoxemia.</p>
                <p><span class="correct">Administers 100% oxygen prior to suctioning the client</span>: Preoxygenate with 100% oxygen to reduce the risk of hypoxemia.</p>
                <p><span class="correct">Administers 100% oxygen prior to suctioning the client</span>: Preoxygenate with 100% oxygen to reduce the risk of hypoxemia.</p>
                <p><span class="correct">Administers 100% oxygen prior to suctioning the client</span>: Preoxygenate with 100% oxygen to reduce the risk of hypoxemia.</p>
                <div class="img-holder">
                    <img src="../private/img/test/att.FWVKtYZi1-sOWuwyDcgh1I4kRBAS_8h-0Ov-jogpgzE.jpg" alt="" class="answer_img">
                </div>
                <h3>Explanation</h3>
                <h5>Correct Answer</h5>
                <p><span class="correct">Administers 100% oxygen prior to suctioning the client</span>: Preoxygenate with 100% oxygen to reduce the risk of hypoxemia.</p>
                <p><span class="correct">Administers 100% oxygen prior to suctioning the client</span>: Preoxygenate with 100% oxygen to reduce the risk of hypoxemia.</p>
                <p><span class="correct">Administers 100% oxygen prior to suctioning the client</span>: Preoxygenate with 100% oxygen to reduce the risk of hypoxemia.</p>
                <p><span class="correct">Administers 100% oxygen prior to suctioning the client</span>: Preoxygenate with 100% oxygen to reduce the risk of hypoxemia.</p>
                
                <div class="img-holder">
                    <img src="../private/img/test/att.FWVKtYZi1-sOWuwyDcgh1I4kRBAS_8h-0Ov-jogpgzE.jpg" alt="" class="answer_img">
                </div>
            </div>
        </section>
        <!-- Loader -->
        <div class="pre-loadder">
            <div class="loader"></div>
        </div>
        <!--Navigation to Top Button -->
        <!-- <div id="navigator" class="navigator">
            <p style="display: none;">\u274C</p>
            <p id="topNavigator" class="topNavigator"><i class="fas fa-arrow-up"></i></p>
        </div> -->

    </main>
<!-- SessionFooter Begin-->
<div class="sessionFooter">
            <div class="session_holder_first">
                <div class="endSession"><i class="fas fa-times"></i>End</div>
                <div class="suspend"><i class="fa-regular fa-circle-pause"></i>Suspend</div>
            </div>
            <div class="session_holder_second">
                <div class="pre_btn"><i class="fas fa-arrow-left"></i>Back</div>
                <div class="navig_end"><i class="fas fa-bars"></i>Navigation</div>
                <div class="next_btn"><i class="fas fa-arrow-right"></i>Next</div>
            </div>
        </div><!-- SessionFooter Ends -->
    <footer>
        
        <!-- Footermain Begin -->
        <div class="footermain">
            <div class="credit">
                <p>Copyright @ <a>PGI Bharatpur</a>
            </div>
        </div><!-- Footermain ends -->
    </footer><!-- Footer Ends -->
    <script src="js/scripts.js"></script>
</body>

</html>