@extends('layouts.app')

@section('content')


<section class="hero is-primary">
  <div class="hero-head">

  </div>
  <section class="hero is-info">
    <div class="hero-body">
        <div class="container">
          <h1 class="title">Cloud Fridge</h1>
          <h2 class="subtitle">The easiest way to manage your fridge.</h2>
        </div>
    </div>
  </section>

  {{-- About us section--}}
  <div class = "container">
    <div class="block">
      <article class="message">
          <div class="message-header">
              <p>About the App</p>
          </div>
          <div class="message-body">
              <p>This application aims to make keeping track of what is in your fridge easy.
                Just upload a picture of your receipt and you are ready to go!
              </p>
          </div>
          <div class="message-header">
              <p>About Us</p>
          </div>
          <div class="message-body">
              <p>Team Leader and Github Master - George Butler</p>
              <p>Scrum Master - Sydni Starling</p>
              <p>Back-End Lead - James Day</p>
              <p>Front-End Developer - Raymond Gee</p>
              <p>Front-End Lead - Aung Hein</p>
              <p>Developer - Jian Xin Qi</p>
              <p>Back-End Developer - Tommy Nguyen</p>
          </div>
      </article>
    </div>



    


    <div class="block">
      <article class="message">
        <div class ="container">
          <div class="message-header is-centered">
            <p style="text-align:center" ><strong>Recorded Meeting Summary</strong></p>
          </div>
        </div>

        
        <div class="message-body">
          <table class="table is-striped is-fullwidth">
           
            <thead>
                <th>Date</th>
                <th>Members</th>
                <th>Duration</th>
                <th>Location</th>
                <th>Logged Summary</th>
            </thead>
            <tbody>
              <tr>
                <td>September 16</td>
                <td>George Butler, James Day, Sydni Starling, Jian Xin Qi, Raymond Gee, Aung Hein, Tommy Nguyen</td>
                <td>40 Minutes</td>
                <td>In Class</td>
                <td>
                  Help entire group in Setting up GitHub and make sure everybody are connected to the correct repo Project.
                  A risk was some team members doesn't have much experience using Git/GitHub. This risk is important because
                  all team members should be able to push/pull/commit for their individual role. Our solution was to spend time
                  together to make sure everybody is set up and was able to know which command used for Git and they are able to
                  push into our Github repo.
                </td>
              </tr>

              <tr>
                <td>September 25</td>
                <td>George Butler, James Day, Sydni Starling, Jian Xin Qi, Raymond Gee, Aung Hein, Tommy Nguyen</td>
                <td>1 hour 15 Minutes</td>
                <td>In Class</td>
                <td>
                  Discussion of each member's role of the group and type of coding practices used in our team. The risk are
                  some of our group members weren't strong at a particular technical skill set. Our solution was to allow members
                  to work in a particular role that they are interested in and give members who are not as proficient to join a front-end
                  or back-end so the each member can teach each other.
                </td>
              </tr>

              <tr>
                <td>October 10</td>
                <td>George Butler, James Day, Sydni Starling, Jian Xin Qi, Raymond Gee, Aung Hein, Tommy Nguyen</td>
                <td>1 hour 15 Minutes</td>
                <td>Online</td>
                <td>
                  Had a in-class group team work. Everybody communicated affectively to work on Milestone 2. One of our main component for our
                  group project was to have the receipt scanner to our app and the risk was that we never thought to place the receipt scanner
                  to our app. We resolved this problem by correcting our project and to add our receipt scanner.
                </td>
              </tr>

              <tr>
                <td>October 15</td>
                <td>George Butler, James Day, Sydni Starling, Jian Xin Qi, Raymond Gee, Aung Hein, Tommy Nguyen</td>
                <td>1 hour 40 Minutes</td>
                <td>Online</td>
                <td>
                  Met in class to discuss Project. Our group decided to start a different Framework called Laravel. This is a risk because
                  our team members needs to relearn a new Framework and need to worry if we could turn our project on time. Laravel was not
                  familiar with everybody in our group and we had difficulties with getting everything installed into our Machine. Those members of
                  our team who had Mac books had some difficulties. Those members who have Mac book that figure out the solution about Laravel helped
                  those students who are struggling with MacBook.
                </td>
              </tr>

              <tr>
                <td>October 17</td>
                <td>James Day, Sydni Starling, Jian Xin Qi, Raymond Gee, Aung Hein, Tommy Nguyen</td>
                <td>1 hour</td>
                <td>In Class</td>
                <td>
                  We met In-class to discuss about project. All risk in our group still have trouble using Laravel. Some members need to install composer
                  and Laravel to start running this Framework. This risk is important because the due date is coming soon and not all students have gotten the
                  Framework into their computer yet. We resolve this problem by providing online resources on our online group chat called Discord so all members
                  can get help when they are away.
                </td>
              </tr>

              <tr>
                <td>October 22</td>
                <td>James Day, Sydni Starling, Jian Xin Qi, Raymond Gee, Aung Hein, Tommy Nguyen</td>
                <td>1 hour 40 Minutes</td>
                <td>In Class</td>
                <td>
                  During our In-class and after-Class meeting, we all spent time working on our group project together. The risk that we have was we are missing
                  our group leader and there are some important information that we need to tell him that our professor had told us. This is a risk because
                  our group hopes to have everybody to get the right message heard and understand what needed to be done for this project. We resolve this issue
                  by our group members who was present reach out to our leader to let him know what was discussed by the professor.
                </td>
              </tr>

              <tr>
                <td>October 29</td>
                <td>James Day, Sydni Starling, Jian Xin Qi, Raymond Gee, Aung Hein, Tommy Nguyen</td>
                <td>45 Minutes</td>
                <td>Online</td>
                <td>
                  Met during last part of class. The risk are some members aren't present to work on the project together and wasn't able to
                  communicated the full message to them. We resort to communicated to the students who didn't show up through Discord (Messaging
                  Application). Project milestone 3 is due next week and the risk was don't know if everybody who didn't show up got the message
                  on if members got their parts accomplished.
                </td>
              </tr>

              <tr>
                <td>November 4</td>
                <td>James Day, Sydni Starling, Jian Xin Qi, Raymond Gee, Aung Hein</td>
                <td>2 hour 15 Minutes</td>
                <td>Library</td>
                <td>
                  Tomorrow is the due day for Milestone 3, so our group met at 12pm to finalize Milestone 3. The risk we had was we are not fully finished yet
                  by the time we all met together.  
                </td>
              </tr>
            </tbody>

          </table>
        </div>
      </article>
    </div>

  </div>
  {{-- About us section TEST--}}
  {{--
  <div class="block">
    <article class="message">
        <div class="message-header">
            <p>About Us</p>
        </div>
        <div class="message-body">
            <table class="table is-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Team Leader & Github Master</td>
                        <td>George Butler</td>
                    </tr>
                    <tr>
                        <td>Scrum Master</td>
                        <td>Sydni Starling</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>
  </div>
--}}

</section>


@endsection
