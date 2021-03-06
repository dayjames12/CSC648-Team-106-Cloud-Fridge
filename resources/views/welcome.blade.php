@extends('layouts.app')

@section('content')
<section>
    <div class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">Cloud Fridge</h1>
                <h2 class="subtitle text-wrap">
                    The easiest way to manage your fridge. This application aims to make keeping track of what is in
                    your fridge easy.
                    Just upload a picture of your receipt and you are ready to go!
                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <article class="message">
            <div class="message-header">About the App</div>
            <div class="message-body">
                <div class="box">
                    <p>This application aims to make keeping track of what is in your fridge easy. Just upload a picture of your receipt and you are ready to go!</p>
                </div>
            </div>
            <div class="message-header">About Us</div>
            <div class="message-body">
                <div class="box">
                    <p>Team Leader and Github Master - George Butler</p>
                    <p>Scrum Master - Sydni Starling</p>
                    <p>Back-End Lead - James Day</p>
                    <p>Front-End Developer - Raymond Gee</p>
                    <p>Front-End Lead - Aung Hein</p>
                    <p>Front-End Developer - Jian Xin Qi</p>
                    <p>Back-End Developer - Tommy Nguyen</p>
                </div>
            </div>
            <div class="message-header">Recorded Meeting Summary</div>
            <div class="message-body">
                <div class="box">
                    <h5 class="title is-5">9/16/19</h5>
                    <div class="content">Help entire group in Setting up GitHub and make sure everybody are connected to
                        the correct repo Project. A risk was some team members doesn't have much experience using
                        Git/GitHub. This risk is important because all team members should be able to push/pull/commit
                        for their individual role. Our solution was to spend time together to make sure everybody is set
                        up and was able to know which command used for Git and they are able to push into our Github
                        repo.</div>
                </div>
                <div class="box">
                    <h5 class="title is-5">9/25/19</h5>
                    <div class="content">Discussion of each member's role of the group and type of coding practices used
                        in our team. The risk are some of our group members weren't strong at a particular technical
                        skill set. Our solution was to allow members to work in a particular role that they are
                        interested in and give members who are not as proficient to join a front-end or back-end so the
                        each member can teach each other.</div>
                </div>
                <div class="box">
                    <h5 class="title is-5">10/10/19</h5>
                    <div class="content">Had a in-class group team work. Everybody communicated affectively to work on
                        Milestone 2. One of our main component for our group project was to have the receipt scanner to
                        our app and the risk was that we never thought to place the receipt scanner to our app. We
                        resolved this problem by correcting our project and to add our receipt scanner.</div>
                </div>
                <div class="box">
                    <h5 class="title is-5">10/15/19</h5>
                    <div class="content">Met in class to discuss Project. Our group decided to start a different
                        Framework called Laravel. This is a risk because our team members needs to relearn a new
                        Framework and need to worry if we could turn our project on time. Laravel was not familiar with
                        everybody in our group and we had difficulties with getting everything installed into our
                        Machine. Those members of our team who had Mac books had some difficulties. Those members who
                        have Macbook that figure out the solution about Laravel helped those students who are struggling
                        with MacBook.</div>
                </div>
                <div class="box">
                    <h5 class="title is-5">10/17/19</h5>
                    <div class="content">We met In-class to discuss about project. All risk in our group still have
                        trouble using Laravel. Some members need to install composer and Laravel to start running this
                        Framework. This risk is important because the due date is coming soon and not all students have
                        gotten the Framework into their computer yet. We resolve this problem by providing online
                        resources on our online group chat called Discord so all members can get help when they are
                        away.</div>
                </div>
                <div class="box">
                    <h5 class="title is-5">10/22/19</h5>
                    <div class="content">During our In-class and after-Class meeting, we all spent time working on our
                        group project together. The risk that we have was we are missing our group leader and there are
                        some important information that we need to tell him that our professor had told us. This is a
                        risk because our group hopes to have everybody to get the right message heard and understand
                        what needed to be done for this project. We resolve this issue by our group members who was
                        present reach out to our leader to let him know what was discussed by the professor.</div>
                </div>
                <div class="box">
                    <h5 class="title is-5">10/29/19</h5>
                    <div class="content">Met during last part of class. The risk are some members aren't present to work
                        on the project together and wasn't able to communicated the full message to them. We resort to
                        communicated to the students who didn't show up through Discord (Messaging Application). Project
                        milestone 3 is due next week and the risk was don't know if everybody who didn't show up got the
                        message on if members got their parts accomplished.</div>
                </div>
                <div class="box">
                    <h5 class="title is-5">11/4/19</h5>
                    <div class="content">Tomorrow is the due day for Milestone 3, so our group met at 12pm to finalize
                        Milestone 3. The risk we had was we are not fully finished yet by the time we all met together.
                    </div>
                </div>
                <div class="box">
                    <h5 class="title is-5">11/5/19</h5>
                    <div class="content">Everybody gathered in class time to fix our project database. The risk was that
                        not everybody had their Database fixed into their machine. Most of our team members had
                        difficulties with using an open-source web-server for databases called XAMPP. This risk is
                        important because We need the database to store our information. We are currently resolving this
                        issue by supporting team members who got XAMPP working and by going online to search solutions
                        to help us. We had a member on our team that was able to get their database of XAMPP and tried
                        his best to help those team members who was struggling.</div>
                </div>
                <div class="box">
                    <h5 class="title is-5">11/7/19</h5>
                    <div class="content">Group came to class together on explaining our group progress so far. There are
                        many improvements that our group should work on. Some of the improvements that our team should
                        think about is deciding which features should go on the nav bar, keep top nav bar for account
                        related things, and adding unique features that is related to the type of food in the Fridge and
                        we should do this by finding API to get this Information. There was also some UX that we should
                        fix in our application as well. These Information that we received from our meeting today from
                        our professor is important because we hope to use this to continue to improve our project. We
                        hope to fix our project ASAP.</div>
                </div>
                <div class="box">
                    <h5 class="title is-5">11/12/19</h5>
                    <div class="content">
                        After class, our team worked on the project and talked about how to improve on our database of
                        our project and describe what we all have implemented. Some of our team members aren't finished
                        with everything on their part yet but that is ok. Whenever we had time after class, we put
                        effort to make our app better. A risk that our team member are facing was we needed to get the
                        receipt scanning working and to spent time to work on the recommendations we received from the
                        professor last week and each of our team members are contributing by working on parts that we
                        were critiqued on.
                    </div>
                </div>
                <div class="box">
                    <h5 class="title is-5">11/14/19</h5>
                    <div class="content">
                        After class, our team met to work on the applicaiton. We discussed about how to improve on our
                        database and which features are
                        the most important to implement first. The DB is working on most group members computers and the
                        front end is working opendir
                        side bar menu display options.
                    </div>
                </div>
                <div class="box">
                    <h5 class="title is-5">11/21/19</h5>
                    <div class="content">
                      Our group came to class and discusssed what features/testing we need to complete for milestone 4.
                        Set tasks for thanksgiving break and discussed what contributions we all can be making. 
                       The recipe API is the main feature we are working on.

                        Our entire group met up again on the day before class started to ensure all or most members of
                        our group understand the instructions on implementing the project. Our group discuss what should
                        be added and deleted. During our group meeting today and since everybody is together in-person,
                        we mostly worked on implementing our project and allow time for members who are working together
                        at a specific task to have a better understanding of who is doing which role.
                    </div>
                </div>
                <div class="box">
                    <h5 class="title is-5">12/6/19</h5>
                    <div class="content">
                        There are some of our teams members who decide to come together to work on the project today.
                        Some team members wanted to met in person to work on the project because we felt that by coming
                        together in person really help on improving the progress of our project. Although most of us
                        where coding, we thought this moment is another great moment for us to bond because we get to
                        know our team members throughout this semester and it was great to talk to our other team
                        members while not worry about class work. Even though this is a Software Engineering course,
                        this project showed us how to work with other people in a team and that
                        everything isn't all about working but understand that everyone are people and have
                        personalities.
                    </div>
                </div>
                <div class="box">
                    <h5 class="title is-5">12/12/19</h5>
                    <div class="content">
                      Our group met in the library prior to class to reflect on M4 and assign tasks to each memebr to finish 
                      our application. Finishing project, finalizing the UI, and functionality of our website is up to speed.
                    </div>
                </div>
                <div class="box">
                    <h5 class="title is-5">12/12/19</h5>
                    <div class="content">
                      Our group met in the library outside of class. The front-end worked on finalizing the GUI display and making 
                      our application the most user-friendly, and presentable as we could. The back-end is finishing up implementing
                      the OCR, and final features such as recipe API's to complete prior to demo day. As we all work together the semester is coming
                      to a close and we are working hard to get our app up to speed for the presentation. Our back-end and front-end 
                      continue to communicate and run ideas off eachother to fnish the app. 
                    </div>
                </div>

                <div class="box">
                    <h5 class="title is-5">12/18/19</h5>
                    <div class="content">
                    Group coming together to finalizing the Project before submission.
                    </div>
                </div>
         
            </article>
        </div>
</section>
@endsection