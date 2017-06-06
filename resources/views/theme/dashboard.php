<style>
   #scrolltab
   {
       min-height: 200px;
   }
    #mydash
    {
        min-height: 100%;
        overflow: hidden;
    }
</style>
<div id="dash-box">
    <div class="row">
        <div class="col s12">
            <ul class="tabs" style="background: #4db6ac;border-radius: 2px">
                <li class="tab col s3"><a class="active white-text"  href="#mydash">My Dashboard</a></li>
                <li class="tab col s3"><a   href="#accinfo" class="white-text">Account Information</a></li>
                <li class="tab col s3"><a href="#myorders"class="white-text">My Orders</a></li>
                <li class="tab col s3"><a href="#myuploads" class="white-text">My Uploads</a></li>
            </ul>
        </div>
        <div id="blankdash" style="width: 100%;height: 70px"></div>
        <div id="scrolltab">
        <div id="mydash" class="col s12 left-align">

        <h5>My Dashboard</h5><hr/>
           <span class="right-align">
               <p>Welcome <b>Jayant Mishra</b></p>
               </span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

            <div class="left-align" style="width: 25%;padding: 5px">
                Last Login: <span class="red-text"><?= date('Y-m-d');?></span>
                <p>Current IP: <span class="purple-text"><?=Request::ip();?></span></p>
                <p><a href="logout">End Session</a> </p>
               </div>
            <h5>You have</h5><hr/>
            <div class="center-align" style="width:100%;min-height:55px;padding:10px">
                <div class="vitra-details-dash" style="background: #3d994e;">
                <span class="white-text" style="font-size: 65px">0</span><br/>
                <span class="white-text" style="font-size: 40px"><p>Orders</p></span>
                </div>
                <div class="vitra-details-dash" style="background:#1c4b6d">
                    <span class="white-text" style="font-size: 65px">0</span><br/>
                    <span class="white-text" style="font-size: 40px"><p>Uploads</p></span>
                </div>
                <div class="vitra-details-dash" style="background: #602330">
                    <span class="white-text" style="font-size: 65px">0</span><br/>
                    <span class="white-text" style="font-size: 40px"><p>Alerts</p></span>
                </div>
                <div class="vitra-details-dash" style="background: #e5b149">
                    <span class="white-text" style="font-size: 65px">0</span><br/>
                    <span class="white-text" style="font-size: 40px"><p>Messages</p></span>
                </div>
            </div>
        </div>
        <div id="accinfo" class="col s12 left-align">
            <h5>Account Info</h5>
            <hr/>
            <span style=" float: left;margin-right: 2px;">
               <p><img src="images/profilepic.png" width="150" style="border: 1px solid black"/> </p>
               </span>
            <div id="infouser" style="margin-bottom: 25px;float: right">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="full_name" disabled type="text" class="validate">
                        <label for="full_name" class="black-text">Wayne Rooney</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="disabled" disabled type="text" class="validate">
                        <label for="disabled" class="black-text">Username</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="disabled" disabled type="text" class="validate">
                        <label for="disabled" class="black-text">email@domain.com</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="disabled" disabled type="text" class="validate">
                        <label for="disabled" class="black-text">*********</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="disabled" disabled type="text" class="validate">
                        <label for="disabled" class="black-text">Created on July 11th 2017 </label>
                    </div>
                    <div class="input-field col s12">
                        <input id="disabled" disabled type="text" class="validate">
                        <label for="disabled" class="black-text">Kathmandu, Nepal</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="bio"disabled class="materialize-textarea black-text" data-length="120">Lorem ipsum dolor sit amet, vel natum iriure iudicabit ut, usu accusamus adolescens at, per cu etiam labitur iudicabit. Quodsi albucius consequuntur et eum, vim no dicant perfecto reformidans. Qui rebum suscipit nominati cu. Vitae noluisse appellantur eos ei, tale denique complectitur eam ut, suavitate maluisset nam ad.</textarea>
                    </div>
                    <a class="waves-effect waves-teal btn-flat btn-large right-align" href="profile">Edit<i
                            class="material-icons right">edit</i></a>
                </div>
                </div>
            </div>
        <div id="myorders" class="col s12 left-align">
            <h5>My Orders</h5>
            <hr/>
        </div>
        <div id="myuploads" class="col s12 left-align">
            <h5>My Uploads</h5>
            <hr/>
        </div>
        </div>

    </div>
    </div>

</div>
</main>