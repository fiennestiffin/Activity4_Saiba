<?php 

session_start();

if (!isset($_SESSION["currentUserEmail"])) {
    echo "Invalid Entry";
    exit();
}

?>

<!DOCTYPE html>

<head>
    <link rel='stylesheet' href='./css/dashboard-style.css'>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script/CalenderScript.js"></script>
</head>

<body>
    <div class="red-part">
        <div class="logo-container">
            <div class="logo-holder">
                <div class="wmsulogo"></div>
            </div>
            <h1>WMSU</h1>
        </div>

        <div class="tab-container">
            <div class="tabs">
                <button class="menutab" onclick="openTab(event, 'Dashboard')" id="defaultTab">Dashboard</button>
                <button class="menutab" onclick="openTab(event, 'Groups')">Groups</button>
                <button class="menutab" onclick="openTab(event, 'Appointment')">Appointment</button>
                <button class="menutab" onclick="openTab(event, 'My Events')">My Events</button>
            </div>
        </div>

        <button class="btn newAppBtn" onclick="openTab(event, 'New Event')">New Event</button>

        <div class="logout-div">
            <a  href="index.html">
                <div class="logout-btn">
                    <i class="material-icons">logout</i>
                    <p>Logout</p>
                </div>
            </a>
            
        </div>
    </div>

    <div class="white-part">

        <!-- Upper Tab -->
        <div class="upper-dash">
            <h1 id="tab-name">Dashboard</h1>
            <div class="icons-container">
                <i class="material-icons">notifications</i>
                <div class="user-img" onclick="openTab(event, 'Profile')"></div>
            </div>
        </div>

        <div class="contents">
            <div id="Dashboard" class="tabcontent">

                <!-- Content -->
                <div class="contents-container">
                    <div class="left-content">
                        <h2>welcome</h2>
                        <?php echo "<h1> ". $_SESSION["currentUserFirstName"] . " " . $_SESSION["currentUserLastName"] . " </h1>" ?>
                        <h2 class="pos-txt">Professor</h2>

                        <div class="overview">
                            <i class="material-icons">today</i>
                            <div class="ov1">
                                <h1>07</h1>
                                <h2>Appointments</h2>
                                <h3>TODAY</h3>
                            </div>

                            <div class="line"></div>

                            <i class="material-icons">event_available</i>
                            <div class="ov2">
                                <h1>05</h1>
                                <h2>Created Events</h2>
                            </div>

                            <div class="line"></div>

                            <i class="material-icons">event_busy</i>
                            <div class="ov3">
                                <h1>09</h1>
                                <h2>Cancelled</h2>
                            </div>
                        </div>

                        <div class="todays-app">
                            <h1>Today's Appointments</h1>

                            <div class="ppl-container">
                                <div id="indv" class="indv-container">
                                    <div class="user-img"></div>
                                    <div class="ta-grp-txt">
                                        <h1>Vidya Anjali</h1>
                                        <h2>Student</h2>
                                    </div>
                                </div>
                                <div id="indv" class="indv-container">
                                    <div class="user-img"></div>
                                    <div class="ta-grp-txt">
                                        <h1>Trey Karme</h1>
                                        <h2>Student</h2>
                                    </div>
                                </div>
                                <div id="indv" class="indv-container">
                                    <div class="user-img"></div>
                                    <div class="ta-grp-txt">
                                        <h1>Lila Elin</h1>
                                        <h2>Student</h2>
                                    </div>
                                </div>
                                <div id="indv" class="indv-container">
                                    <div class="user-img"></div>
                                    <div class="ta-grp-txt">
                                        <h1>Piolo Salvaloza</h1>
                                        <h2>Student</h2>
                                    </div>
                                </div>
                                <div id="indv" class="indv-container">
                                    <div class="user-img"></div>
                                    <div class="ta-grp-txt">
                                        <h1>Arvin Dwight Barrera</h1>
                                        <h2>Student</h2>
                                    </div>
                                </div>
                                <div id="indv" class="indv-container">
                                    <div class="user-img"></div>
                                    <div class="ta-grp-txt">
                                        <h1>BSCS 3A</h1>
                                        <h2>ICS</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="right-content">
                        <div class="upcoming">
                            <div class="rc-txt">
                                <h1>Upcoming Appointments</h1>
                            </div>
                            <div class="up-details">
                                <div class="circle ua_1"></div>
                                <div class="namepos">
                                    <h1>BSCS 3A</h1>
                                    <h2>ICS</h2>
                                </div>
                                <div class="timedate">
                                    <h2>12:30 PM</h2>
                                    <h2>12 - 06 - 2021</h2>
                                </div>
                            </div>

                            <div class="line"></div>

                            <div class="up-details">
                                <div class="circle ua_2"></div>
                                <div class="namepos">
                                    <h1>Vivien Sylviane</h1>
                                    <h2>Student</h2>
                                </div>
                                <div class="timedate">
                                    <h2>01:45 PM</h2>
                                    <h2>12 - 06 - 2021</h2>
                                </div>
                            </div>

                            <div class="line"></div>

                            <div class="up-details">
                                <div class="circle ua_3"></div>
                                <div class="namepos">
                                    <h1>Lila Elin</h1>
                                    <h2>Student</h2>
                                </div>
                                <div class="timedate">
                                    <h2>05:30 PM</h2>
                                    <h2>12 - 06 - 2021</h2>
                                </div>
                            </div>
                        </div>

                        <div class="previous">
                            <div class="rc-txt">
                                <h1>Previous Appointments</h1>
                            </div>
                            <div class="up-details">
                                <div class="circle"></div>
                                <div class="namepos">
                                    <h1>Vivien Sylviane</h1>
                                    <h2>Student</h2>
                                </div>
                                <div class="timedate">
                                    <h2>02:30 PM</h2>
                                    <h2>12 - 02 - 2021</h2>
                                </div>
                            </div>

                            <div class="line"></div>

                            <div class="up-details">
                                <div class="circle"></div>
                                <div class="namepos">
                                    <h1>Loukios Domen</h1>
                                    <h2>Teacher</h2>
                                </div>
                                <div class="timedate">
                                    <h2>09:00 AM</h2>
                                    <h2>12 - 02 - 2021</h2>
                                </div>
                            </div>

                            <div class="line"></div>

                            <div class="up-details">
                                <div class="circle"></div>
                                <div class="namepos">
                                    <h1>Abdul Áleifr</h1>
                                    <h2>Student</h2>
                                </div>
                                <div class="timedate">
                                    <h2>08:30 AM</h2>
                                    <h2>12 - 02 - 2021</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Groups" class="tabcontent">
                <div class="main-container">
                    <div class="groups-container">
                        <div class="group">
                            <div class="color one"></div>
                            <div class="name-icon-container">
                                <div class="name-container">
                                    <p class="name-txt">BSCS 3A</p>
                                    <p class="see-members-txt" onclick="document.getElementById('see-members').style.display='block'; closeForm('see-members')">See Members</p>
                                </div>
                                <div class="settings-container">
                                    <i class="material-icons settings">settings</i>
                                    <i class="material-icons arrow">arrow_drop_down</i>
                                </div>
                            </div>
                            <div class="descrip-container">
                                <div class="line"></div>
                            </div>
                        </div>

                        <div class="group">
                            <div class="color two"></div>
                            <div class="name-icon-container">
                                <div class="name-container">
                                    <p class="name-txt">BSCS 3B</p>
                                    <p class="see-members-txt" onclick="document.getElementById('see-members').style.display='block'">See Members</p>
                                </div>
                                <div class="settings-container">
                                    <i class="material-icons settings">settings</i>
                                    <i class="material-icons arrow">arrow_drop_down</i>
                                </div>
                            </div>
                            <div class="descrip-container">
                                <div class="line"></div>
                            </div>
                        </div>

                        <div class="group">
                            <div class="color three"></div>
                            <div class="name-icon-container">
                                <div class="name-container">
                                    <p class="name-txt">BSIT 3A</p>
                                    <p class="see-members-txt" onclick="document.getElementById('see-members').style.display='block'">See Members</p>
                                </div>
                                <div class="settings-container">
                                    <i class="material-icons settings">settings</i>
                                    <i class="material-icons arrow">arrow_drop_down</i>
                                </div>
                            </div>
                            <div class="descrip-container">
                                <div class="line"></div>
                            </div>
                        </div>

                        <div class="group">
                            <div class="color four"></div>
                            <div class="name-icon-container">
                                <div class="name-container">
                                    <p class="name-txt">BSIT 3B</p>
                                    <p class="see-members-txt" onclick="document.getElementById('see-members').style.display='block'">See Members</p>
                                </div>
                                <div class="settings-container">
                                    <i class="material-icons settings">settings</i>
                                    <i class="material-icons arrow">arrow_drop_down</i>
                                </div>
                            </div>
                            <div class="descrip-container">
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="new-grp-div">
                    <i class="material-icons" onclick="document.getElementById('add-new-grp').style.display='block'; closeForm('add-new-grp');">add_circle_outline</i>
                </div>

                <div id="see-members" class="modal">
                    <form class='modal-form animate' method="post">
                        <div class="top-color">
                            <p>Member List</p>
                        </div>

                        <div class="ml-content-div">
                            <p>Members</p>

                            <div class="member-list">
                                <div class="member-div">
                                    <div class="member-name"><p>Jhoemer Muyco</p></div>
                                    <div class="member-pos"><p>Student</p></div>
                                </div>
                                <div class="member-div">
                                    <div class="member-name"><p>Arvin Dwight Corpuz</p></div>
                                    <div class="member-pos"><p>Student</p></div>
                                </div>
                                <div class="member-div">
                                    <div class="member-name"><p>Derald Galon</p></div>
                                    <div class="member-pos"><p>Student</p></div>
                                </div>
                            </div>
                        </div>
                    
                    </form>
                </div>

                <div id="add-new-grp" class="modal">
                    <form class='modal-form animate' method="post">
                        <div class="top-color">
                            <p>Add New Group</p>
                        </div>

                        <div class="add-grp-container">
                            <div class="grp-details-cont">
                                <input type="text" id="grp-name" name="grp-name" placeholder="Group Name" required>
                                <textarea id="mem-email" name="mem-email" placeholder="Member's Email" rows="5" cols="50" required></textarea>
                            </div>

                            <div class="confirm-cont">
                                <button class="btn grp-confirm">Confirm</button>
                            </div>
                        </div>
                    
                    </form>
                </div>

            </div>

            <div id="Appointment" class="tabcontent">
                <div class="appointment_panel appointment_left_panel">
                    <div class="appn_calendar upper_calendar">
                        <p class="appn_calen_mmyy" id="appn_calen_mmyy_a"><b>MONTH--- YEAR</b></p>
                        <table id="appn_calen_display_id_a" class="appn_calen_display">
                            <tr><td>S</td><td>M</td><td>T</td><td>W</td><td>T</td><td>F</td><td>S</td></tr>
                        </table>
                    </div>

                    <div class="appn_calendar lower_calendar">
                        <p class="appn_calen_mmyy" id="appn_calen_mmyy_b"><b>MONTH--- YEAR</b></p>
                        <table id="appn_calen_display_id_b" class="appn_calen_display">
                            <tr><td>S</td><td>M</td><td>T</td><td>W</td><td>T</td><td>F</td><td>S</td></tr>
                        </table>
                    </div>
                </div>

                <div class="appointment_panel appointment_right_panel">
                    <p id="appn_calen_date_id" class="appn_calen_date"><b>date day, month</b></p>
                    <div class="banner_group">
                        <div class="banner_img_pic"></div><div class="banner_img_pic"></div><div class="banner_img_pic"></div>
                        <p class="appn_count">3 Appointments Today</p>
                    </div>

                    <div class="now_sched">
                        <div class="now_sched_in">
                            <div class="now_sched_entry now_sched_entry1">
                                <p class="time_txt">08:00 AM</p>
                                <div class="now_sched_cont">
                                    
                                </div>
                            </div>
                            <div class="now_sched_entry">
                                <p class="time_txt">09:00 AM</p>
                                <div class="now_sched_cont">

                                </div>
                            </div>
                            <div class="now_sched_entry">
                                <p class="time_txt">10:00 AM</p>
                                <div class="now_sched_cont">

                                </div>
                            </div>
                            <div class="now_sched_entry">
                                <p class="time_txt">11:00 AM</p>
                                <div class="now_sched_cont">

                                </div>
                            </div>
                            <div class="now_sched_entry">
                                <p class="time_txt">12:00 PM</p>
                                <div class="now_sched_cont now_sched_cont_has_content">
                                    <div class="color_marker">
                                        
                                    </div>
                                    <div class="sched_entry_img"></div>
                                    <p class="sched_entry_txt">BSCS 3A</p>
                                </div>
                            </div>
                            <div class="now_sched_entry">
                                <p class="time_txt">01:00 PM</p>
                                <div class="now_sched_cont">

                                </div>
                            </div>
                            <div class="now_sched_entry">
                                <p class="time_txt">02:00 PM</p>
                                <div class="now_sched_cont">

                                </div>
                            </div>
                            <div class="now_sched_entry">
                                <p class="time_txt">03:00 PM</p>
                                <div class="now_sched_cont">

                                </div>
                            </div>
                            <div class="now_sched_entry">
                                <p class="time_txt">04:00 PM</p>
                                <div class="now_sched_cont">

                                </div>
                            </div>
                            <div class="now_sched_entry">
                                <p class="time_txt">05:00 PM</p>
                                <div class="now_sched_cont">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div id="My Events" class="tabcontent">
                <div class="my-events-div">
                    <div class="event-container">
                        <div class="event-color a"></div>

                        <div class="event-details-container">
                            <div class="event-settings">
                                <i class="material-icons">settings</i>
                            </div>

                            <div class="event-texts-div">
                                <p class="event-name-txt">Project Consultation</p>
                                <p class="event-duration-txt">30 mins</p>
                                <a class="view-booking-txt" href="./booking.html">View booking page</a>
                            </div>

                            <div class="line"></div>

                            <div class="alert-share-div">
                                <div class="alert-cont">
                                    <i class="material-icons">notifications_active</i>
                                    <p onclick="document.getElementById('alert-modal').style.display='block'; closeForm('alert-modal');">Alert</p>
                                </div>
                                <div class="share-cont">
                                    <button class="btn share-btn a" onclick="linkCopied()">Share</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="event-container">
                        <div class="event-color b"></div>

                        <div class="event-details-container">
                            <div class="event-settings">
                                <i class="material-icons">settings</i>
                            </div>

                            <div class="event-texts-div">
                                <p class="event-name-txt">Midterm Exam</p>
                                <p class="event-duration-txt">2 hr</p>
                                <a class="view-booking-txt" href="./booking.html">View booking page</a>
                            </div>

                            <div class="line"></div>

                            <div class="alert-share-div">
                                <div class="alert-cont">
                                    <i class="material-icons">notifications_active</i>
                                    <p onclick="document.getElementById('alert-modal').style.display='block'; closeForm('alert-modal');">Alert</p>
                                </div>
                                <div class="share-cont">
                                    <button class="btn share-btn b" onclick="linkCopied()">Share</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="event-container">
                        <div class="event-color c"></div>

                        <div class="event-details-container">
                            <div class="event-settings">
                                <i class="material-icons">settings</i>
                            </div>

                            <div class="event-texts-div">
                                <p class="event-name-txt">Group Discussion</p>
                                <p class="event-duration-txt">1 hr</p>
                                <a class="view-booking-txt" href="./booking.html">View booking page</a>
                            </div>

                            <div class="line"></div>

                            <div class="alert-share-div">
                                <div class="alert-cont">
                                    <i class="material-icons">notifications_active</i>
                                    <p onclick="document.getElementById('alert-modal').style.display='block'; closeForm('alert-modal');">Alert</p>
                                </div>
                                <div class="share-cont">
                                    <button class="btn share-btn c" onclick="linkCopied()">Share</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="event-container">
                        <div class="event-color d"></div>

                        <div class="event-details-container">
                            <div class="event-settings">
                                <i class="material-icons">settings</i>
                            </div>

                            <div class="event-texts-div">
                                <p class="event-name-txt">Study Session</p>
                                <p class="event-duration-txt">30 mins</p>
                                <a class="view-booking-txt" href="./booking.html">View booking page</a>
                            </div>

                            <div class="line"></div>

                            <div class="alert-share-div">
                                <div class="alert-cont">
                                    <i class="material-icons">notifications_active</i>
                                    <p onclick="document.getElementById('alert-modal').style.display='block'; closeForm('alert-modal');">Alert</p>
                                </div>
                                <div class="share-cont">
                                    <button class="btn share-btn d" onclick="linkCopied()">Share</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="event-container">
                        <div class="event-color e"></div>

                        <div class="event-details-container">
                            <div class="event-settings">
                                <i class="material-icons">settings</i>
                            </div>

                            <div class="event-texts-div">
                                <p class="event-name-txt">Makeup Class</p>
                                <p class="event-duration-txt">1 hr 30 mins</p>
                                <a class="view-booking-txt" href="./booking.html">View booking page</a>
                            </div>

                            <div class="line"></div>

                            <div class="alert-share-div">
                                <div class="alert-cont">
                                    <i class="material-icons">notifications_active</i>
                                    <p onclick="document.getElementById('alert-modal').style.display='block'; closeForm('alert-modal');">Alert</p>
                                </div>
                                <div class="share-cont">
                                    <button class="btn share-btn e" onclick="linkCopied()">Share</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="alert-modal" class="modal">
                        <form class='modal-form animate alert-form' method="post">
                            <div class="top-color">
                                <p>Alert Attendees</p>
                            </div>

                            <div class="alert-main-cont">
                                <textarea id="alert-msg" name="alert-msg" placeholder="Message to send to attendees.." rows="5" cols="50" required></textarea>
                            
                                <div class="notif-cont alert-notif-cont">
                                    <label class="container notif-email">
                                        Email
                                        <input type="checkbox" checked="checked">
                                        <span class="ele-checkmark"></span>
                                    </label>
                                    <label class="container notif-textmsg">
                                        Text Message
                                        <input type="checkbox" checked="checked">
                                        <span class="ele-checkmark"></span>
                                    </label>
                                </div>

                                <button class="btn send-alert">Send Alert</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="New Event" class="tabcontent">
                <div class="new_appointment_panel">
                    <div class="nap-main-container">
                        <div class="na-left-container">
                            <p class="na-text info">Info</p>
                            <div class="event-infos">
                                <input type="text" id="evt-name" name="evt-name" placeholder="Event Name" required>
                                <input type="text" id="loc-name" name="loc-name" placeholder="Location Name" required>
                                <textarea id="evt-desc" name="evt-desc" placeholder="Event Description" rows="4" cols="50" required></textarea>
                                <input type="text" id="evt-link" name="evt-link" placeholder="wmsuaas.edu/Event Link" required>
                            </div>
                            <p class="na-text color">Event Color</p>
                            <div class="colors-list">
                                <div class="circle na-c1"></div>
                                <div class="circle na-c2"></div>
                                <div class="circle na-c3"></div>
                                <div class="circle na-c4"></div>
                                <div class="circle na-c5"></div>
                                <div class="circle na-c6"></div>
                                <div class="circle na-c7"></div>
                                <div class="circle na-c8"></div>
                                <div class="circle na-c9"></div>
                                <div class="circle na-c10"></div>
                            </div>


                        </div>
                        <div class="line-divider"></div>
                        <div class="na-right-container">
                            <p class="na-text attendees">Attendees</p> 
                            <div class="attendees-options">
                                <label class="radio-container any">Any
                                    <input type="radio" checked="checked" id="anyRadio" name="attendeesGrp" onclick="EnableDisableTextBox('anyRadio', 'specific-txt')">
                                    <span class="checkmark"></span>
                                </label>

                                <label class="radio-container any">WMSU Only
                                    <input type="radio" id="wmsuRadio" name="attendeesGrp" onclick="EnableDisableTextBox('wmsuRadio', 'specific-txt')">
                                    <span class="checkmark"></span>
                                </label>

                                <label class="radio-container any" >Specific
                                    <input type="radio" id="specificRadio" name="attendeesGrp" onclick="EnableDisableTextBox('specificRadio', 'specific-txt')">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <input type="text" id="specific-txt" name="specific-txt" placeholder="Group/Emails" disabled="disabled">

                            <p class="na-text date-range">Date Range</p> 
                            <div class="dr-options">
                                <div class="input-caldays">
                                    <label class="radio-container calDays">
                                        Calendar Days:
                                        <input type="radio" checked="checked" id="calDaysRadio" name="drGroup" onclick="EnableDisableTextBox('calDaysRadio', 'calDaysTxt')">
                                        <span class="checkmark"></span>
                                        <input type="text" id="calDaysTxt" name="calDaysTxt" placeholder="15">
                                    </label>
                                </div>
                                <div class="dr-cont">
                                    <label class="radio-container dr">
                                        Within a Date Range
                                        <input type="radio" id="date-range-radio" name="drGroup" onclick="EnableDisableTextBox('date-range-radio', 'calDaysTxt')">
                                        <span class="checkmark"></span>
                                    </label>
                                    <i class="material-icons iDR" onclick="document.getElementById('date-range-cal').style.display='block'; closeForm('date-range-cal');">date_range</i>
                                </div>
                                <label class="radio-container if">
                                    Indefinitely into the future
                                    <input type="radio" id="future-radio" name="drGroup" onclick="EnableDisableTextBox('future-radio', 'calDaysTxt')">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            
                            <p class="na-text duration">Duration</p> 
                            <div class="duration-options">
                                <input type="text" id="duration-txt" name="duration-txt" placeholder="30">
                                <div class="custom-select" style="width:200px;">
                                    <select>
                                      <option value="0">Select Time:</option>
                                      <option value="1">Minutes</option>
                                      <option value="2">Hours</option>
                                    </select>
                                </div>
                            </div>

                            <div class="avail-and-notif">
                                <div class="avail-cont">
                                    <p class="na-text availability">Availability</p> 
                                    <button class="btn availBtn" onclick="document.getElementById('set-hours').style.display='block'; closeForm('set-hours');">Set Hours</button>
                                </div>
                                <div class="notif-cont">
                                    <p class="na-text notification">Notification</p> 
                                    <label class="container notif-email">
                                        Email
                                        <input type="checkbox" checked="checked">
                                        <span class="ele-checkmark"></span>
                                    </label>
                                    <label class="container notif-textmsg">
                                        Text Message
                                        <input type="checkbox" checked="checked">
                                        <span class="ele-checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            <div id="date-range-cal" class="modal">
                                <form class='modal-form cal-form animate' method="post">
                                    <div class="top-color">
                                        <p>Calendar</p>
                                    </div>
                                    <div class="new-app-cal">
                                        <div class="appn_calendar upper_calendar">
                                            <p class="appn_calen_mmyy new-app-calen-mmyy" id="appn_calen_mmyy_c"><b>MONTH--- YEAR</b></p>
                                            <table id="appn_calen_display_id_c" class="appn_calen_display new-app-cal-display">
                                                <tr><td>S</td><td>M</td><td>T</td><td>W</td><td>T</td><td>F</td><td>S</td></tr>
                                            </table>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div id="set-hours" class="modal set-modal">
                                <form class='modal-form set-hours-form animate' method="post">
                                    <div class="top-color">
                                        <p>Event Availability</p>
                                    </div>

                                    <div class="set-hours-cont">
                                        <div class="days mon">
                                            <label class="container days-chkmrk-div">
                                                Monday
                                                <input type="checkbox">
                                                <span class="ele-checkmark days-chkmark"></span>
                                            </label>

                                            <div class="time-range-div">
                                                <div class="custom-select tr-sel" style="width:100px;">
                                                    <select id="mon-start" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1;'>
                                                      <option value="9:00am">9:00am</option>
                                                      <option value="9:30am">9:30am</option>
                                                      <option value="10:00am">10:00am</option>
                                                      <option value="10:30am">10:30am</option>
                                                      <option value="11:00am">11:00am</option>
                                                      <option value="11:30am">11:30am</option>
                                                      <option value="12:00pm">12:00pm</option>
                                                    </select>
                                                </div>
                                                <p>-</p>
                                                <div class="custom-select tr-sel" style="width:100px;">
                                                    <select id="mon-end" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1;'>
                                                      <option value="9:00am">9:00am</option>
                                                      <option value="9:30am">9:30am</option>
                                                      <option value="10:00am">10:00am</option>
                                                      <option value="10:30am">10:30am</option>
                                                      <option value="11:00am">11:00am</option>
                                                      <option value="11:30am">11:30am</option>
                                                      <option value="12:00pm">12:00pm</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <i class="material-icons">delete_outline</i>
                                            <i class="material-icons">more_time</i>

                                        </div>

                                        <div class="days tues">
                                            <label class="container days-chkmrk-div">
                                                Tuesday
                                                <input type="checkbox">
                                                <span class="ele-checkmark days-chkmark"></span>
                                            </label>

                                            <div class="time-range-div">
                                                <div class="custom-select tr-sel" style="width:100px;">
                                                    <select id="tues-start" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1;'>
                                                      <option value="9:00am">9:00am</option>
                                                      <option value="9:30am">9:30am</option>
                                                      <option value="10:00am">10:00am</option>
                                                      <option value="10:30am">10:30am</option>
                                                      <option value="11:00am">11:00am</option>
                                                      <option value="11:30am">11:30am</option>
                                                      <option value="12:00pm">12:00pm</option>
                                                    </select>
                                                </div>
                                                <p>-</p>
                                                <div class="custom-select tr-sel" style="width:100px;">
                                                    <select id="tues-end" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1;'>
                                                      <option value="9:00am">9:00am</option>
                                                      <option value="9:30am">9:30am</option>
                                                      <option value="10:00am">10:00am</option>
                                                      <option value="10:30am">10:30am</option>
                                                      <option value="11:00am">11:00am</option>
                                                      <option value="11:30am">11:30am</option>
                                                      <option value="12:00pm">12:00pm</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <i class="material-icons">delete_outline</i>
                                            <i class="material-icons">more_time</i>

                                        </div>

                                        <div class="days wed">
                                            <label class="container days-chkmrk-div">
                                                Wednesday
                                                <input type="checkbox">
                                                <span class="ele-checkmark days-chkmark"></span>
                                            </label>

                                            <div class="time-range-div">
                                                <div class="custom-select tr-sel" style="width:100px;">
                                                    <select id="wed-start" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1;'>
                                                      <option value="9:00am">9:00am</option>
                                                      <option value="9:30am">9:30am</option>
                                                      <option value="10:00am">10:00am</option>
                                                      <option value="10:30am">10:30am</option>
                                                      <option value="11:00am">11:00am</option>
                                                      <option value="11:30am">11:30am</option>
                                                      <option value="12:00pm">12:00pm</option>
                                                    </select>
                                                </div>
                                                <p>-</p>
                                                <div class="custom-select tr-sel" style="width:100px;">
                                                    <select id="wed-end" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1;'>
                                                      <option value="9:00am">9:00am</option>
                                                      <option value="9:30am">9:30am</option>
                                                      <option value="10:00am">10:00am</option>
                                                      <option value="10:30am">10:30am</option>
                                                      <option value="11:00am">11:00am</option>
                                                      <option value="11:30am">11:30am</option>
                                                      <option value="12:00pm">12:00pm</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <i class="material-icons">delete_outline</i>
                                            <i class="material-icons">more_time</i>
                                        </div>

                                        <div class="days thu">
                                            <label class="container days-chkmrk-div">
                                                Thursday
                                                <input type="checkbox">
                                                <span class="ele-checkmark days-chkmark"></span>
                                            </label>

                                            <div class="time-range-div">
                                                <div class="custom-select tr-sel" style="width:100px;">
                                                    <select id="thu-start" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1;'>
                                                      <option value="9:00am">9:00am</option>
                                                      <option value="9:30am">9:30am</option>
                                                      <option value="10:00am">10:00am</option>
                                                      <option value="10:30am">10:30am</option>
                                                      <option value="11:00am">11:00am</option>
                                                      <option value="11:30am">11:30am</option>
                                                      <option value="12:00pm">12:00pm</option>
                                                    </select>
                                                </div>
                                                <p>-</p>
                                                <div class="custom-select tr-sel" style="width:100px;">
                                                    <select id="thu-end" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1;'>
                                                      <option value="9:00am">9:00am</option>
                                                      <option value="9:30am">9:30am</option>
                                                      <option value="10:00am">10:00am</option>
                                                      <option value="10:30am">10:30am</option>
                                                      <option value="11:00am">11:00am</option>
                                                      <option value="11:30am">11:30am</option>
                                                      <option value="12:00pm">12:00pm</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <i class="material-icons">delete_outline</i>
                                            <i class="material-icons">more_time</i>
                                        </div>

                                        <div class="days fri">
                                            <label class="container days-chkmrk-div">
                                                Friday
                                                <input type="checkbox" checked="checked">
                                                <span class="ele-checkmark days-chkmark"></span>
                                            </label>

                                            <div class="time-range-div">
                                                <div class="custom-select tr-sel" style="width:100px;">
                                                    <select id="fri-start" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1;'>
                                                      <option value="9:00am">9:00am</option>
                                                      <option value="9:30am">9:30am</option>
                                                      <option value="10:00am">10:00am</option>
                                                      <option value="10:30am">10:30am</option>
                                                      <option value="11:00am">11:00am</option>
                                                      <option value="11:30am">11:30am</option>
                                                      <option value="12:00pm">12:00pm</option>
                                                    </select>
                                                </div>
                                                <p>-</p>
                                                <div class="custom-select tr-sel" style="width:100px;">
                                                    <select id="fri-end" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1;'>
                                                      <option value="9:00am">9:00am</option>
                                                      <option value="9:30am">9:30am</option>
                                                      <option value="10:00am">10:00am</option>
                                                      <option value="10:30am">10:30am</option>
                                                      <option value="11:00am">11:00am</option>
                                                      <option value="11:30am">11:30am</option>
                                                      <option value="12:00pm">12:00pm</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <i class="material-icons">delete_outline</i>
                                            <i class="material-icons">more_time</i>
                                        </div>

                                        <div class="days sat">
                                            <label class="container days-chkmrk-div">
                                                Saturday
                                                <input type="checkbox">
                                                <span class="ele-checkmark days-chkmark"></span>
                                            </label>

                                            <div class="time-range-div">
                                                <div class="custom-select tr-sel" style="width:100px;">
                                                    <select id="sat-start" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1;'>
                                                      <option value="9:00am">9:00am</option>
                                                      <option value="9:30am">9:30am</option>
                                                      <option value="10:00am">10:00am</option>
                                                      <option value="10:30am">10:30am</option>
                                                      <option value="11:00am">11:00am</option>
                                                      <option value="11:30am">11:30am</option>
                                                      <option value="12:00pm">12:00pm</option>
                                                    </select>
                                                </div>
                                                <p>-</p>
                                                <div class="custom-select tr-sel" style="width:100px;">
                                                    <select id="sat-end" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1;'>
                                                      <option value="9:00am">9:00am</option>
                                                      <option value="9:30am">9:30am</option>
                                                      <option value="10:00am">10:00am</option>
                                                      <option value="10:30am">10:30am</option>
                                                      <option value="11:00am">11:00am</option>
                                                      <option value="11:30am">11:30am</option>
                                                      <option value="12:00pm">12:00pm</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <i class="material-icons">delete_outline</i>
                                            <i class="material-icons">more_time</i>
                                        </div>

                                        <div class="days sun">
                                            <label class="container days-chkmrk-div">
                                                Sunday
                                                <input type="checkbox">
                                                <span class="ele-checkmark days-chkmark"></span>
                                            </label>

                                            <div class="time-range-div">
                                                <div class="custom-select tr-sel" style="width:100px;">
                                                    <select id="sun-start" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1;'>
                                                      <option value="9:00am">9:00am</option>
                                                      <option value="9:30am">9:30am</option>
                                                      <option value="10:00am">10:00am</option>
                                                      <option value="10:30am">10:30am</option>
                                                      <option value="11:00am">11:00am</option>
                                                      <option value="11:30am">11:30am</option>
                                                      <option value="12:00pm">12:00pm</option>
                                                    </select>
                                                </div>
                                                <p>-</p>
                                                <div class="custom-select tr-sel" style="width:100px;">
                                                    <select id="sun-end" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1;'>
                                                      <option value="9:00am">9:00am</option>
                                                      <option value="9:30am">9:30am</option>
                                                      <option value="10:00am">10:00am</option>
                                                      <option value="10:30am">10:30am</option>
                                                      <option value="11:00am">11:00am</option>
                                                      <option value="11:30am">11:30am</option>
                                                      <option value="12:00pm">12:00pm</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <i class="material-icons">delete_outline</i>
                                            <i class="material-icons">more_time</i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            <button class="btn addNewApp">Add</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Profile" class="tabcontent">
                <div class="profile-main-container">
                    <div class="profile-main-div">
                        <div class="user-pic-upload-div">
                            <div class="profile-picture-container">
                            </div>
                        </div>
                        <div class="user-details-div">
                            <div class="user-details name-container">
                                <input type="text" value="Aaron Amber" disabled="disabled">
                                <p>Name</p>
                            </div>
                            <div class="user-details email-container">
                                <input type="text" value="aaron.amber2@gmail.com" disabled="disabled">
                                <p>Email</p>
                            </div>
                            <div class="user-details pos-container">
                                <input type="text" value="Student" disabled="disabled">
                                <p>Position</p>
                            </div>
                            <div class="user-details num-container">
                                <input type="text" value="09077689667" disabled="disabled">
                                <p>Contact Number</p>
                            </div>
                        </div>
                        <div class="edit-prof-div">
                            <button class="btn edit-profile">Edit Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="script/Tab Script.js"></script>
<script>
    setup_calendar(['a', 'b', 'c']);
    const d = new Date();
    document.getElementById('appn_calen_date_id').innerText = `${d.getDate()} ${monthn[d.getMonth() % 12]}, ${d.getFullYear()}`;

    function closeForm(elementID){
        var modal = document.getElementById(elementID);

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    }

    function EnableDisableTextBox(radioID, txtID) {
        var specificRadio = document.getElementById(radioID);
        var txtSpecific = document.getElementById(txtID);

        txtSpecific.disabled = specificRadio.checked && (radioID == 'specificRadio' || radioID == 'calDaysRadio') ? false : true;
        if (!txtSpecific.disabled) {
            txtSpecific.focus();
        }
    }

    function linkCopied(){
        alert("Link Copied!");
    }
</script> 
</html>