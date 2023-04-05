<?php
$table->date('created_at');
$table->boolean('confirmed');
$table->dateTime('created_at', 0);
$table->time('sunrise', 0);
$table->enum('level', ['easy', 'hard']);
$table->integer('votes');
$table->json('options');
$table->string('name', 100);
$table->tinyInteger('votes');
$table->unsignedTinyInteger('votes');
$table->unsignedBigInteger('user_id');
$table->foreign('user_id')->references('id')->on('users');

 ?>
 // ------------------------------------------
 // ||||||| live_stream_course_lesson ||||||||
 // id  [P.K] int(11) not_null simple single auto_increment
 // title [A.K] varchar(200) not_null single simple
 // duration_session tinyint(3) simple single Default[10] Domain [10 , 30 , 60 , 120 ]
 // start_date DATE null simple composite default[current]
 // start_time TIME null simple composite
 // lesson_slides varchar() -- unknown
 // live_course_id [F.K]
 // ------------------------------------------



 <i class="fa fa-list-alt" aria-hidden="true"></i>
  <i class="fa fa-clock" aria-hidden="true"></i>
  <i class="fa fa-bookmark" aria-hidden="true"></i>
  <i class="fa fa-bookmark-o" aria-hidden="true"></i>

  <i class="fa fa-book" aria-hidden="true"></i>
  <i class="fa fa-flask" aria-hidden="true"></i>

  <i class="fa fa-hourglass-start" aria-hidden="true"></i>
  <i class="fa fa-area-chart" aria-hidden="true"></i>


  duration 
  lecture 


                             <div class="table-responsive">
                               <table class="table table-cards align-items-center">
                                 <tr>
                                   <td >
                                     <div class="media ">
                                         <div>
                                           <span class="icon-sm "><i class="fas fa-file-pdf " ></i></span>
                                         </div>
                                         <div class="media-body ml-3">
                                             <span class="text-lg">A Message for students </span>
                                         </div>
                                     </div>
                                   </td>
                                   <td class="text-right">
                                     <a href="#" class=" text-primary h6  "> <i class="fas fa-download"></i> Download</a>
                                   </td>
                                 </tr>
                               </table>
                             </div>

course form :::


<div class="container my-3">
<div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-body">

              <h4 class="card-title mb-3">Tabs Bordered</h4>

              <ul class="nav nav-tabs nav-bordered mb-3 customtab">
                  <li class="nav-item">
                      <a href="#home-b1" data-toggle="tab" aria-expanded="false" class="nav-link">
                          <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                          <span class="d-none d-lg-block">Course</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#profile-b1" data-toggle="tab" aria-expanded="true" class="nav-link active">
                          <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                          <span class="d-none d-lg-block">FAQ</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#settings-b1" data-toggle="tab" aria-expanded="false" class="nav-link">
                          <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                          <span class="d-none d-lg-block">Prequisite</span>
                      </a>
                  </li>
              </ul>

              <div class="tab-content">
                  <div class="tab-pane" id="home-b1">
                    <form class="" action="/Course/store" method="post">
                      @csrf
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <label for="validationDefault01">Course Title</label>
                          <input type="text" name="title" class="form-control" id="validationDefault01" placeholder="i.e History "  required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <label for="validationDefault02">Course Description</label>
                          <textarea name="description" rows="8" cols="80" class="form-control" id="validationDefault02"></textarea>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-3 mb-3">
                          <input type="text" name="date" class="form-control" data-toggle="date" placeholder="Select date">
                        </div>

                        <div class="col-md-3 mb-3">
                          <select name="level" class="custom-select"  >
                              <option value="1">Beginner</option>
                              <option value="2">Intermediate</option>
                              <option value="3">Advanced</option>
                          </select>
                       </div>

                       <div class="col-md-3 mb-3">
                         <input type="text" name="catagory" class="form-control"  placeholder="i.e Math"  >
                       </div>

                       <div class="col-md-3 mb-3">
                         <input type="file" name="course_poster" id="file-1" class="custom-input-file" data-multiple-caption="{count} files selected" multiple />
                         <label for="file-1">
                             <i class="fa fa-upload"></i>
                             <span>Choose a file…</span>
                         </label>
                       </div>
                      </div>
                      <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                  </div>
                  <div class="tab-pane show active" id="profile-b1">

                  </div>
                  <div class="tab-pane" id="settings-b1">

                  </div>
              </div>

          </div> <!-- end card-body-->
      </div> <!-- end card-->
  </div> <!-- end col -->
</div>
</div>






        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                  <form class="" action="/Course/store" method="post">
                    @csrf
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="validationDefault01">Course Title</label>
                        <input type="text" name="title" class="form-control" id="validationDefault01" placeholder="i.e History "  required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="validationDefault02">Course Description</label>
                        <textarea name="description" rows="8" cols="80" class="form-control" id="validationDefault02"></textarea>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="col-md-3 mb-3">
                        <input type="text" name="date" class="form-control" data-toggle="date" placeholder="Select date">
                      </div>

                      <div class="col-md-3 mb-3">
                        <select name="level" class="custom-select"  >
                            <option value="1">Beginner</option>
                            <option value="2">Intermediate</option>
                            <option value="3">Advanced</option>
                        </select>
                     </div>

                     <div class="col-md-3 mb-3">
                       <input type="text" name="catagory" class="form-control"  placeholder="i.e Math"  >
                     </div>

                     <div class="col-md-3 mb-3">
                       <input type="file" name="course_poster" id="file-1" class="custom-input-file" data-multiple-caption="{count} files selected" multiple />
                       <label for="file-1">
                           <i class="fa fa-upload"></i>
                           <span>Choose a file…</span>
                       </label>
                     </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
                  </form>
                </div>
            </div>
        </div>





course form :::



      <section class="slice slice-lg bg-gradient-primary">
                  <span class="tongue tongue-top"><i class="fas fa-angle-up"></i></span>
                  <div class="container">
                    <div class="mb-5 text-center">
                      <h3 class="text-white mt-4">We help businesses grow</h3>
                      <div class="fluid-paragraph mt-3">
                        <p class="lead lh-180 text-white">Always looking for better ways to do things, innovate and help people achieve their goals.</p>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-lg-10">
                        <div class="table-responsive-lg">
                          <table class="table table-hover table-scale--hover table-cards align-items-center">
                            <tbody>
                              <tr>
                                <th scope="row">
                                  <div class="media align-items-center">
                                    <div>
                                      <span class="avatar bg-primary text-white mr-4">FD</span>
                                    </div>
                                    <div class="media-body">
                                      <a href="#" class="h5 mb-0">Front End Developer</a>
                                    </div>
                                  </div>
                                </th>
                                <td>
                                  <span class="h6">Full time</span>
                                </td>
                                <td><i class="fas fa-map-marker mr-3"></i><span class="h6">San Francisco, US</span></td>
                              </tr>
                              <tr class="table-divider"></tr>
                              <tr>
                                <th scope="row">
                                  <div class="media align-items-center">
                                    <div>
                                      <span class="avatar bg-warning text-white mr-4">SD</span>
                                    </div>
                                    <div class="media-body">
                                      <a href="#" class="h5 mb-0">Senior Back End Developer</a>
                                    </div>
                                  </div>
                                </th>
                                <td>
                                  <span class="h6">Part time</span>
                                </td>
                                <td><i class="fas fa-map-marker mr-3"></i><span class="h6">San Francisco, US</span></td>
                              </tr>
                              <tr class="table-divider"></tr>
                              <tr>
                                <th scope="row">
                                  <div class="media align-items-center">
                                    <div>
                                      <span class="avatar bg-info text-white mr-4">UX</span>
                                    </div>
                                    <div class="media-body">
                                      <a href="#" class="h5 mb-0">UI/UX Designer with experience</a>
                                    </div>
                                  </div>
                                </th>
                                <td>
                                  <span class="h6">Full time</span>
                                </td>
                                <td><i class="fas fa-map-marker mr-3"></i><span class="h6">Bucharest, RO</span></td>
                              </tr>
                              <tr class="table-divider"></tr>
                              <tr>
                                <th scope="row">
                                  <div class="media align-items-center">
                                    <div>
                                      <span class="avatar bg-danger text-white mr-4">GD</span>
                                    </div>
                                    <div class="media-body">
                                      <a href="#" class="h5 mb-0">Web &amp; Graphic Designer</a>
                                    </div>
                                  </div>
                                </th>
                                <td>
                                  <span class="h6">Project based</span>
                                </td>
                                <td><i class="fas fa-map-marker mr-3"></i><span class="h6">San Francisco, US</span></td>
                              </tr>
                              <tr class="table-divider"></tr>
                              <tr>
                                <th scope="row">
                                  <div class="media align-items-center">
                                    <div>
                                      <span class="avatar bg-primary text-white mr-4">FD</span>
                                    </div>
                                    <div class="media-body">
                                      <a href="#" class="h5 mb-0">Front End Developer</a>
                                    </div>
                                  </div>
                                </th>
                                <td>
                                  <span class="h6">Full time</span>
                                </td>
                                <td><i class="fas fa-map-marker mr-3"></i><span class="h6">San Francisco, US</span></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="text-center mt-5">
                          <a href="#" class="text-white"><i class="fas fa-angle-right mr-2"></i>View all job openings</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>








                                          <div class="tab-pane" id="profile-b1">
                                            <form class="" action="/Course/faq/store" method="post">
                                              @csrf
                                              <input type="hidden" name="course_id" value="{{$course_id}}">
                                              <div class="form-row">
                                                <div class="col-md-12 mb-3">
                                                  <label for="validationDefault01">Question</label>
                                                  <input type="text" name="question" class="form-control" id="validationDefault01" placeholder="i.e. What is ... "  required>
                                                </div>
                                              </div>
                                              <div class="form-row">
                                                <div class="col-md-12 mb-3">
                                                  <label for="validationDefault02">Answer</label>
                                                  <textarea name="answer" rows="5" cols="80" class="form-control" id="validationDefault02"  placeholder="This course is about ..."></textarea>
                                                </div>
                                              </div>
                                              <button class="btn btn-primary" type="submit">NEXT</button>
                                            </form>
                                          </div>

                                                                    <div class="tab-pane" id="settings-b1">
                                                                      <form class="" action="/Course/preqs/store" method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="course_id" value="{{$course_id}}">
                                                                        <div class="form-row">
                                                                          <div class="col-md-9 mb-3">
                                                                            <label for="validationDefault01">Course name</label>
                                                                            <input type="text" name="course_name" class="form-control" id="validationDefault01" placeholder="i.e. What is ... "  required>
                                                                          </div>

                                                                          <div class="col-md-3 mb-3">
                                                                            <label for="validationDefault01">Success Rate</label>
                                                                            <input type="text" name="success_rate" class="form-control" id="validationDefault01" placeholder="i.e. 67%"  required>
                                                                          </div>
                                                                        </div>

                                                                        <button class="btn btn-primary" type="submit">NEXT</button>
                                                                      </form>
                                                                    </div>




                                                                     <h4>{{$course}}</h4>















                                                                     The primary goal of this quick start guide is to introduce you to Unreal Engine 4`s (UE4) development environment. By the end of this guide, you`ll know how to set up and develop C++ Projects in UE4. This guide shows you how to create a new Unreal Engine project, add a new C++ class to it, compile the project, and add an instance of a new class to your level. By the time you reach the end of this guide, you`ll be able to see your programmed Actor floating above a table in the level.

                This quick start guide shows you how to add assets to your Unreal Engine (UE4) games. By the end of this guide, you`ll know how to use the Project Browser to create new projects and navigate the Content Browser to find and add content. You`ll also know where to find information on the FBX Content Pipeline while learning how to use the Material Editor to modify Materials before applying them to a Static Mesh Actor.

                Main Features
                Achieve Hollywood best quality visuals out of the box.
                With complete C++ source code access, you can study.
                Comes with designer-friendly Blueprint visual scripting.
                Unreal Engine provides Robust Multiplayer Framework.
                The built-in Cascade visual effects editor enables particles.
                Unreal Engine 4`s Material Editor makes use of physically.
                What is the target audience?
                You might be thinking, all of the above – and that is fine. But as a complete beginner learning Unreal Engine 4.
                The rendering system in Unreal Engine 4 is an all-new, DirectX 11 pipeline that includes deferred shading.
                Learning a new game engine as a complete beginner is very intimidating. There are a lot of tutorials, documentation and advice already out but how do you start and proceed with learning Unreal Engine 4 is unclear. You get pulled into many different directions and end up confused and overwhelmed.

                I have spent a lot of time deconstructing what it takes to learn a game engine from scratch





                . What it is that you should focus on first and what you should avoid until later












                <div class="main-content">
                    <div class="container h-100vh d-flex align-items-center">
                      <div class="col">
                        <div class="row justify-content-center">
                          <div class="col-md-6 col-lg-5 col-xl-4">
                            <div>
                              <div class="mb-5 text-center">
                                <h6 class="h3">Login</h6>
                                <p class="text-muted mb-0">Sign in to your account to continue.</p>
                              </div>
                              <span class="clearfix"></span>
                              <form role="form">
                                <div class="form-group">
                                  <label class="form-control-label">Email address</label>
                                  <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="email" class="form-control" id="input-email" placeholder="name@example.com">
                                  </div>
                                </div>
                                <div class="form-group mb-4">
                                  <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                      <label class="form-control-label">Password</label>
                                    </div>
                                    <div class="mb-2">
                                      <a href="#!" class="small text-muted text-underline--dashed border-primary">Lost password?</a>
                                    </div>
                                  </div>
                                  <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="input-password" placeholder="Password">
                                    <div class="input-group-append">
                                      <span class="input-group-text">
                                        <i class="fas fa-eye"></i>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                <div class="mt-4">
                                  <button type="button" class="btn btn-block btn-primary">Sign in</button></div>
                              </form>
                              <div class="mt-4 text-center"><small>Not registered?</small>
                                <a href="#" class="small font-weight-bold">Create account</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>






                  <!-- <section>
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                  </section> -->




                  <!-- @if (session('status'))
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          {{ session('status') }} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    		<span aria-hidden="true">&times;</span>
                    	</button>
                    </div>
                  @endif -->

                  <svg id="eb113788-f1f1-4c1f-be62-f1d0ea2e1eb6" data-name="Layer 1"  width="795.39431" height="574.03802" viewBox="0 0 795.39431 574.03802"><defs><linearGradient id="b2a81085-935f-40be-bb27-75940df8c338" x1="-450.78971" y1="2803.04671" x2="-450.78971" y2="2729.34772" gradientTransform="translate(3217.53309 1009.65784) rotate(90)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="gray" stop-opacity="0.25"/><stop offset="0.53514" stop-color="gray" stop-opacity="0.12"/><stop offset="1" stop-color="gray" stop-opacity="0.1"/></linearGradient></defs><title>Graduation</title><ellipse cx="232.05775" cy="450.06897" rx="35.09476" ry="5.26421" transform="translate(-476.55674 294.92367) rotate(-63.61079)" fill="#e0e0e0"/><ellipse cx="670.57742" cy="667.85592" rx="35.09476" ry="3.57677" transform="translate(-428.03695 808.73554) rotate(-63.61079)" fill="#e0e0e0"/><rect x="397.95325" y="566.93514" width="21.05685" height="70.18951" transform="translate(274.52069 -285.26226) rotate(39.54732)" fill="#f55f44"/><rect x="409.32507" y="573.56618" width="23.69234" height="70.18951" transform="translate(489.54965 1134.58125) rotate(-166.7689)" opacity="0.05"/><rect x="411.92558" y="573.86778" width="21.05685" height="70.18951" transform="translate(492.0121 1135.47005) rotate(-166.7689)" fill="#f55f44"/><rect x="414.48638" y="314.08219" width="73.69899" height="489.57186" transform="translate(-452.20218 551.7936) rotate(-63.61079)" fill="url(#b2a81085-935f-40be-bb27-75940df8c338)"/><path d="M655.01556,699.105c-8.584-4.11751-444.8438-220.718-438.55625-217.5983,24.21371-36.95739,31.19689-62.87545,31.19689-62.87545l438.55625,217.5983S670.81132,663.25857,655.01556,699.105Z" transform="translate(-202.30284 -162.98099)" fill="#f5f5f5"/><rect x="421.72508" y="519.09383" width="40.35897" height="70.18951" transform="translate(90.06389 -301.64381) rotate(26.38921)" opacity="0.05"/><rect x="423.47981" y="519.09383" width="36.8495" height="70.18951" transform="translate(90.06389 -301.64381) rotate(26.38921)" fill="#f55f44"/><rect x="428.83545" y="518.70387" width="24.56633" height="70.18951" transform="translate(89.80867 -301.33512) rotate(26.38921)" opacity="0.05"/><rect x="430.59019" y="518.70387" width="21.05685" height="70.18951" transform="translate(89.80867 -301.33512) rotate(26.38921)" fill="#f55f44"/><circle cx="261.30557" cy="563.92499" r="2.92569" fill="#dbdbdb"/><g opacity="0.5"><rect x="29.39431" y="482" width="3" height="17" fill="#47e6b1"/><rect x="231.69716" y="644.98099" width="3" height="17" transform="translate(684.3753 257.30284) rotate(90)" fill="#47e6b1"/></g><g opacity="0.5"><rect x="785.39431" y="270" width="3" height="17" fill="#47e6b1"/><rect x="987.69716" y="432.98099" width="3" height="17" transform="translate(1228.3753 -710.69716) rotate(90)" fill="#47e6b1"/></g><g opacity="0.5"><rect x="47.39431" y="59" width="3" height="17" fill="#47e6b1"/><rect x="249.69716" y="221.98099" width="3" height="17" transform="translate(279.3753 -183.69716) rotate(90)" fill="#47e6b1"/></g><g opacity="0.5"><rect x="695.39431" y="33" width="3" height="17" fill="#47e6b1"/><rect x="897.69716" y="195.98099" width="3" height="17" transform="translate(901.3753 -857.69716) rotate(90)" fill="#47e6b1"/></g><path d="M214.59252,416.4373a3.67458,3.67458,0,0,1-2.04749-4.441,1.76592,1.76592,0,0,0,.0799-.40754h0a1.84257,1.84257,0,0,0-3.31045-1.22119h0a1.76637,1.76637,0,0,0-.2039.3618,3.67459,3.67459,0,0,1-4.441,2.04749,1.766,1.766,0,0,0-.40754-.07991h0a1.84258,1.84258,0,0,0-1.22119,3.31045h0a1.76606,1.76606,0,0,0,.3618.20389,3.67462,3.67462,0,0,1,2.04749,4.441,1.76594,1.76594,0,0,0-.07991.40754h0a1.84257,1.84257,0,0,0,3.31045,1.22119h0a1.7659,1.7659,0,0,0,.2039-.3618,3.67459,3.67459,0,0,1,4.441-2.04749,1.76665,1.76665,0,0,0,.40755.07991h0a1.84257,1.84257,0,0,0,1.22119-3.31045h0A1.76684,1.76684,0,0,0,214.59252,416.4373Z" transform="translate(-202.30284 -162.98099)" fill="#4d8af0" opacity="0.5"/><path d="M386.59252,219.4373a3.67458,3.67458,0,0,1-2.04749-4.441,1.76592,1.76592,0,0,0,.0799-.40754h0a1.84257,1.84257,0,0,0-3.31045-1.22119h0a1.76637,1.76637,0,0,0-.2039.3618,3.67459,3.67459,0,0,1-4.441,2.04749,1.766,1.766,0,0,0-.40754-.07991h0a1.84258,1.84258,0,0,0-1.22119,3.31045h0a1.76606,1.76606,0,0,0,.3618.20389,3.67462,3.67462,0,0,1,2.04749,4.441,1.76594,1.76594,0,0,0-.07991.40754h0a1.84257,1.84257,0,0,0,3.31045,1.22119h0a1.7659,1.7659,0,0,0,.2039-.3618,3.67459,3.67459,0,0,1,4.441-2.04749,1.76665,1.76665,0,0,0,.40755.07991h0a1.84257,1.84257,0,0,0,1.22119-3.31045h0A1.76684,1.76684,0,0,0,386.59252,219.4373Z" transform="translate(-202.30284 -162.98099)" fill="#4d8af0" opacity="0.5"/><path d="M596.59252,730.4373a3.67458,3.67458,0,0,1-2.04749-4.441,1.76592,1.76592,0,0,0,.0799-.40754h0a1.84257,1.84257,0,0,0-3.31045-1.22119h0a1.76637,1.76637,0,0,0-.2039.3618,3.67459,3.67459,0,0,1-4.441,2.04749,1.766,1.766,0,0,0-.40754-.07991h0a1.84258,1.84258,0,0,0-1.22119,3.31045h0a1.76606,1.76606,0,0,0,.3618.20389,3.67462,3.67462,0,0,1,2.04749,4.441,1.76594,1.76594,0,0,0-.07991.40754h0a1.84257,1.84257,0,0,0,3.31045,1.22119h0a1.7659,1.7659,0,0,0,.2039-.3618,3.67459,3.67459,0,0,1,4.441-2.04749,1.76665,1.76665,0,0,0,.40755.07991h0a1.84257,1.84257,0,0,0,1.22119-3.31045h0A1.76684,1.76684,0,0,0,596.59252,730.4373Z" transform="translate(-202.30284 -162.98099)" fill="#4d8af0" opacity="0.5"/><circle cx="759.39431" cy="444" r="6" fill="#f55f44" opacity="0.5"/><circle cx="627.39431" cy="482" r="6" fill="#4d8af0" opacity="0.5"/><circle cx="103.39431" cy="541" r="6" fill="#47e6b1" opacity="0.5"/><circle cx="411.39431" cy="6" r="6" fill="#f55f44" opacity="0.5"/><path d="M407.19716,520.481l-24,36s8,37,185,36,191-36,191-36l-33-48-101-69Z" transform="translate(-202.30284 -162.98099)" fill="#6c63ff"/><path d="M407.19716,520.481l-24,36s8,37,185,36,191-36,191-36l-33-48-101-69Z" transform="translate(-202.30284 -162.98099)" opacity="0.15"/><polygon points="715.394 224 400.394 363 16.394 224 368.394 64 541.184 143.67 547.374 146.53 715.394 224" fill="#6c63ff"/><polygon points="715.394 224 400.394 363 16.394 224 368.394 64 541.184 143.67 547.374 146.53 715.394 224" opacity="0.15"/><polygon points="553.894 257.32 547.894 257.68 541.184 143.67 547.374 146.53 553.894 257.32" fill="#f5f5f5"/><path d="M411.19716,386.481l-28,170s201-65,376,0l-26-180S498.19716,347.481,411.19716,386.481Z" transform="translate(-202.30284 -162.98099)" fill="#6c63ff"/><ellipse cx="553.39431" cy="272" rx="29" ry="20" fill="#f5f5f5"/>
                  </svg>






                  <section class="slice slice-lg bg-gradient-dark">
                        <div class="container">
                          <h3 class="d-inline-block text-white mb-5 border-bottom border-info border-md">Our mission</h3>
                          <div class="row row-grid">
                            <div class="col-lg-6">
                              <p class="lead text-white lh-150 mb-0">Purpose is a professional theme reviewed and approved by the Bootstrap Creators. With each purchase you get a pack of high quality components and page layouts to start building and customize your website in minutes.</p>
                            </div>
                          </div>
                          <h3 class="d-inline-block text-white mt-7 mb-5 border-bottom border-warning border-md">The process</h3>
                          <div class="row">
                            <div class="col-lg-3">
                              <div class="card bg-gradient-primary border-0 text-center py-4 hover-translate-y-n10 hover-shadow-lg">
                                <div class="card-body">
                                  <h5 class="h4 text-white">Download</h5>
                                  <p class="mt-4 mb-0 text-white">
                                    Get closer to you goals by choosing our theme for building web projects.
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3">
                              <div class="card bg-dark border-0 text-center py-4 hover-translate-y-n10 hover-shadow-lg">
                                <div class="card-body">
                                  <h5 class="h4 text-white">Customize</h5>
                                  <p class="mt-4 mb-0 text-white">
                                    Get closer to you goals by choosing our theme for building web projects.
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3">
                              <div class="card bg-gradient-primary border-0 text-center py-4 hover-translate-y-n10 hover-shadow-lg">
                                <div class="card-body">
                                  <h5 class="h4 text-white">Build</h5>
                                  <p class="mt-4 mb-0 text-white">
                                    Get closer to you goals by choosing our theme for building web projects.
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3">
                              <div class="card bg-dark border-0 text-center py-4 hover-translate-y-n10 hover-shadow-lg">
                                <div class="card-body">
                                  <h5 class="h4 text-white">Launch</h5>
                                  <p class="mt-4 mb-0 text-white">
                                    Get closer to you goals by choosing our theme for building web projects.
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>


                      <section class="slice slice-lg">
                              <div class="container">
                                <div class="row row-grid">
                                  <div class="col-lg-4">
                                    <div class="text-center">
                                      <div class="px-4 py-5">
                                        <a href="pages/landing/index.html">
                                          <img alt="Image placeholder" src="assets/img/svg/illustrations/financial-data.svg" class="img-fluid" style="height:190px;">
                                        </a>
                                      </div>
                                      <div class="px-4 pb-4">
                                        <h5>
                                          <a href="#">Awesome design</a>
                                        </h5>
                                        <p class="text-muted">Combine blocks from a range of categories to build pages that are rich in visual style and interactivity.</p>
                                        <a href="#" class="btn btn-sm btn-dark btn-icon rounded-pill">
                                          <span class="btn-inner--text">Learn more</span>
                                          <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="text-center">
                                      <div class="px-4 py-5">
                                        <a href="pages/landing/index.html">
                                          <img alt="Image placeholder" src="assets/img/svg/illustrations/following.svg" class="img-fluid" style="height:190px;">
                                        </a>
                                      </div>
                                      <div class="px-4 pb-4">
                                        <h5>
                                          <a href="#">Intuitive code</a>
                                        </h5>
                                        <p class="text-muted">Combine blocks from a range of categories to build pages that are rich in visual style and interactivity.</p>
                                        <a href="#" class="btn btn-sm btn-dark btn-icon rounded-pill">
                                          <span class="btn-inner--text">Learn more</span>
                                          <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="text-center">
                                      <div class="px-4 py-5">
                                        <a href="pages/landing/index.html">
                                          <img alt="Image placeholder" src="assets/img/svg/illustrations/teaching.svg" class="img-fluid" style="height:190px;">
                                        </a>
                                      </div>
                                      <div class="px-4 pb-4">
                                        <h5>
                                          <a href="#">Helpful build tools</a>
                                        </h5>
                                        <p class="text-muted">Combine blocks from a range of categories to build pages that are rich in visual style and interactivity.</p>
                                        <a href="#" class="btn btn-sm btn-dark btn-icon rounded-pill">
                                          <span class="btn-inner--text">Learn more</span>
                                          <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </section>


                            https://www.youtube.com/watch?v=rA1Qph3iqEU
                            https://www.youtube.com/watch?v=MFh0Fd7BsjE




                            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                                        </g>
                                    </svg>
                                </div>
                            </div>













                            <section class="slice ">
        <div class="container">
          <div class="row align-items-md-center">

            <div class="col-lg-3 col-6 mb-5 mb-lg-0">
              <div class="card text-center mb-5 mb-lg-0">
                <a href="{{route('course')}}">
                <div class="card-body">
                <div class="icon icon-lg text-danger"><i class="fas fa-heart"></i></div>
                <span class="d-block mt-2 h4">Live Stream</span>
                </div>
                </a>
              </div>
            </div>
          <div class="col-lg-3 col-6 mb-5 mb-lg-0">
            <div class="card text-center mb-5 mb-lg-0">
              <a href="{{route('course')}}">
                <div class="card-body">
                <div class="icon icon-lg text-primary"><i class="fas fa-clock"></i></div>
                <span class="d-block mt-2 h4">Course </span>
              </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-6 mb-5 mb-lg-0">
            <div class="card text-center mb-5 mb-lg-0">
              <a href="{{route('course')}}">
              <div class="card-body">
                <div class="icon icon-lg text-warning"><i class="fas fa-images"></i></div>
                <span class="d-block mt-2 h4">Classes </span>
              </div>
                </a>
            </div>
          </div>

          <div class="col-lg-3 col-6 mb-5 mb-lg-0">
            <div class="card text-center mb-5 mb-lg-0">
              <a href="{{route('course')}}">
              <div class="card-body">
                <div class="icon icon-lg text-info">  <i class="fas fa-layer-group"></i></div>
                <span class="d-block mt-2 h4">Quizes</span>
              </div>
                </a>
            </div>
          </div>

          </div>
        </div>
      </section>

            <img src="{{asset('assets/img/brand/logo.svg')}} " width="100" height="100" alt="">




<!-- Fonts -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic%7COpen+Sans:300,400,600,700,800,300italic,400italic,600italic,700italic,800italic" media="all"> -->
        <!-- Font Awesome 5 -->
        <link rel="stylesheet" href="{{asset('/assets/libs/@fortawesome/fontawesome-free/css/all.min.css')}}">
        <!-- Page CSS -->
        <link rel="stylesheet" href="{{asset('assets/libs/select2/dist/css/select2.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/libs/flatpickr/dist/flatpickr.min.css')}}">
        <!-- Purpose CSS -->

 <!-- Purpose Scripts -->
            <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
            <!-- <script src="{{asset('assets/js/purpose.core.js')}}" ></script> -->
            <!-- Docs JS -->
            <!-- <script src="{{asset('assets/libs/highlightjs/highlight.pack.min.js')}}"></script> -->
            <!-- <script src="{{asset('assets/libs/clipboard/dist/clipboard.min.js')}}"></script> -->
            <!-- Page JS -->
            <!-- <script src="{{asset('assets/libs/select2/dist/js/select2.min.js')}}"></script> -->
            <!-- <script src="{{asset('assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script> -->

            <!-- <script src="{{asset('assets/libs/autosize/dist/autosize.min.js')}}"></script> -->
            <!-- <script src="{{asset('assets/libs/flatpickr/dist/flatpickr.min.js')}}"></script> -->

            <!-- Purpose JS -->




            <form class="" action="/Course/delete/{{$course->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class = "action-item action-item-lg mr-4  " name="">Delete</button>
                                  </form>


                                  
                    <a class="action-item action-item-lg mr-4" href="Course/edit/{{$course->id}}" class="dropdown-item"><i class="fas fa-eye"></i></a>
                    <a class="action-item action-item-lg" href="/Course/show/{{$course->id}}" class="dropdown-item"><i class="fas fa-heart"></i></a>



                    @if ($errors->any())
  @foreach ($errors->all() as $error)

  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Heads up!</strong> {{ $error }} 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>                              
  @endforeach        
@endif








































































































































































































































<!-- Video.js base CSS -->
<link href="https://unpkg.com/video.js@7/dist/video-js.min.css" rel="stylesheet">
<!-- City -->
<link href="https://unpkg.com/@videojs/themes@1/dist/city/index.css" rel="stylesheet">
<!-- Forest -->
<link href="https://unpkg.com/@videojs/themes@1/dist/forest/index.css" rel="stylesheet">
<!-- Sea -->
<link href="https://unpkg.com/@videojs/themes@1/dist/sea/index.css" rel="stylesheet">



<!--         
        <source src="https://example.com/video_720.mp4" type="video/mp4" label="720P">
        <source src="https://example.com/video_480.mp4" type="video/mp4" label="480P" selected="true">
        <source src="https://example.com/video_360.mp4" type="video/mp4" label="360P"> -->


        
 <!-- 
     vjs-theme-city 
     vjs-theme-fantasy 
     vjs-theme-forest 
     vjs-theme-sea 
     forest
      vjs-matrix-->



class items must have background image. 
        <?php //print_r($class); ?>




Hizb ut-Tahrir leader Ata Abu Rashta image 





<div class="dropdown">
        @foreach($lessons as $lesson)
        <a class="dropdown-item" href="#">{{$lesson->title}}</a>
        @endforeach 
    </div>




  bugs to fix : 



  player.playlist([{
      name: 'sd',
      duration: 10,
      sources: [
        { src: '{{asset("Lessons/SubjectLessons/queen728.mp4")}}', type: 'video/mp4' ,label:'720P' , selected:'true'},
        { src: '{{asset("Lessons/SubjectLessons/queen480.mp4")}}', type: 'video/mp4' ,label:'480P' },
        { src: '{{asset("Lessons/SubjectLessons/queen360.mp4")}}', type: 'video/mp4' ,label:'360P' },
      ],
      thumbnail: [
        {
          srcset: '{{asset("Poster/Subject/a.png")}}',
          type: 'image/jpeg',
          media: '(min-width: 400px;)'
        },
        {
          src: '{{asset("Poster/Subject/a.png")}}'
        }
      ]
    },
    {
      name: 'second test video',
      description: 'Explore the depths of our planet\'s oceans. ',
      duration: 45,
      sources: [
        { src: '{{asset("Lessons/SubjectLessons/boss360.mp4")}}', type: 'video/mp4' ,label:'360P'},
        { src: '{{asset("Lessons/SubjectLessons/boss480.mp4")}}', type: 'video/mp4' ,label:'480P' },
        { src: '{{asset("Lessons/SubjectLessons/boss728.mp4")}}', type: 'video/mp4' ,label:'720P' , selected:'true'},
      ],

      // you can use <picture> syntax to display responsive images
      thumbnail: [
        {
          srcset: '{{asset("Poster/Subject/a.png")}}',
          type: 'image/jpeg',
          media: '(min-height: 100px;)'
        },
        {
          src: '{{asset("Poster/Subject/a.png")}}'
        }
      ]
    }
    ]);



    <div class="form-row">
        <div class="col-md-12  mb-3">
          
          <input type="file" name="video_lesson" id="poster" class="custom-input-file @error('video_poster') is-invalid @enderror "  value="{{ old('video_poster') }}"  />
          <label for="poster">
              <i class="fa fa-upload"></i>
              <span>{{__('CourseCreate.lessPoster')}}</span>
          </label>
          @error('video_poster') <div class="invalid-feedback">{{ $message }} </div> @enderror</div>
        </div>

        <div class="form-row">

        <div class="col-md-12  mb-3">
          <input type="file" name="video_lesson" id="_360p" class="custom-input-file @error('video_lesson') is-invalid @enderror "    />
          <label for="_360p">
              <i class="fa fa-upload"></i>
              <span>{{__('CourseCreate.lessFile')}}</span>
          </label>
          @error('video_lesson') <div class="invalid-feedback">{{ $message }} </div> @enderror
        </div>

        <div class="col-md-12  mb-3">
          <input type="file" name="video_lesson" id="_480p" class="custom-input-file @error('video_lesson') is-invalid @enderror "  />
          <label for="_480p">
              <i class="fa fa-upload"></i>
              <span>{{__('CourseCreate.lessFile')}}</span>
          </label>
          @error('video_lesson') <div class="invalid-feedback">{{ $message }} </div> @enderror
        </div>

        <div class="col-md-12  mb-3">
          <input type="file" name="video_lesson" id="_720p" class="custom-input-file @error('video_lesson') is-invalid @enderror "   />
          <label for="_720p">
              <i class="fa fa-upload"></i>
              <span>{{__('CourseCreate.lessFile')}}</span>
          </label>
          @error('video_lesson') <div class="invalid-feedback">{{ $message }} </div> @enderror
        </div>


        </div><!-- end of row -->

        
<script>

function king(){


  var title = _("title1");

  var formdata = new FormData(); 
  formdata.append('type' , 0);
  formdata.append('title' , title.value);

  var ajax = new XMLHttpRequest(); 
  ajax.upload.addEventListener("progress" , progressHandler , false); 
  ajax.addEventListener("load" , completeHandler, false); 
  ajax.open("post" , "/king"); 

  // ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajax.setRequestHeader('X-CSRF-Token', "{{csrf_token()}}");
  ajax.send(formdata);


} // end king 


// console.log(_("status"));
// console.log(document.getElementById("upload_form"));
// console.log(document.getElementsByName("video_lesson"))

function uploadFiles(){

  var formdata = new FormData(); 
  var title = _('title');
  var userfiles = document.getElementsByName('video_lesson');
  // console.log(userfiles); 
  
  // formdata.append('title' , title.value);

  for (var i = 0; i < userfiles.length; i++) {
    var file = userfiles[i].files[0];
    if(file) {
      formdata.append("file_" + i , file); 
      // file.name , file.size , file.type 
    }
  } // end of loop 
  
  formdata.append('type' , 0);
  formdata.append('subject_id' , '{{$subject_id}}');
  formdata.append('title' , title.value);


  var ajax = new XMLHttpRequest(); 
 
  ajax.upload.addEventListener("progress" , progressHandler , false); 
  ajax.addEventListener("load" , completeHandler, false); 
  
  ajax.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  
  ajax.open("POST" , "/Upload/subject"); 
  // ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajax.setRequestHeader('X-CSRF-Token', "{{csrf_token()}}");
  ajax.send(formdata);

} // end of uploaded files 



</script>








var arr = [];
for (const key in list) {
  console.log(`${key}: ${list[key].title}`);
  arr.push({
        name: list[key].name,
        
    });
}


// player.playlist([{
//       name: lesson.title ,
//       duration: "king",
//       sources: [
//         // { src: '{{asset("Lessons/SubjectLessons/queen728.mp4")}}', type:'video/mp4' ,label:'720P' , selected:'true'},
//         // { src: '{{asset("Lessons/SubjectLessons/queen480.mp4")}}', type: 'video/mp4' ,label:'480P' },
//         // { src: '{{asset("Lessons/SubjectLessons/queen360.mp4")}}', type: 'video/mp4' ,label:'360P' },
//         // { src: '{{asset("Lessons/SubjectLessons/")}}' + '/' + lesson._360p, type:'video/mp4' ,label:'360P' , selected:'true'},
//         // { src: '{{asset("Lessons/SubjectLessons/")}}' + '/' + lesson._480p, type: 'video/mp4' ,label:'480P' },
//         // { src: '{{asset("Lessons/SubjectLessons/")}}' + '/' + lesson._720p, type: 'video/mp4' , label:'720P' },
//         { src:  `{{asset('${lesson._360p}')}}` , type:'video/mp4' ,label:'360P' , selected:'true'},
//         { src: `{{asset('${lesson._360p}')}}`, type: 'video/mp4' ,label:'480P' },
//         { src: `{{asset('${lesson._360p}')}}`, type: 'video/mp4' , label:'720P' },
     
        
//       ],
//       thumbnail: [
//         {//{{asset("Poster/Subject/a.png")}}
//           srcset: lesson.video_poster,
//           type: 'image/jpeg',
//           media: '(min-width: 200px;)'
//         },
//         {
//           src: lesson.video_poster
//         }
//       ]
//     }
//     ]);


// console.log(userfiles); 
  // formdata.append('title' , title.value);
// file.name , file.size , file.type 
      // console.log(file.size + " " + file.type + " " + file.name); 
      // console.log(file.duration);




  
      <script>

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  const lessonForm = document.getElementById('lessonForm');
  const inputField = document.getElementById('file-1');
  const progressText = document.getElementById('pp');
  const progressWidth = document.getElementById('progress_width');
    
  lessonForm.addEventListener('submit' , lessonUpload);

  function lessonUpload(e){
      e.preventDefault();
      const xhr = new XMLHttpRequest(); 

      xhr.open("POST" , '{{route("course.lesson.store")}}'); 
      xhr.upload.addEventListener("progress" , e => {
         const percent = e.lengthComputable ? (e.loaded / e.total) * 100 : 0 ; 
        // console.log(e);
         progressText.innerText = percent.toFixed(0) + "%"; 
         progressWidth.style.width = percent.toFixed(0) + "%"; 
      }); 

      xhr.setRequestHeader('Content-Type' , 'multipart/form-data'); 
      xhr.setRequestHeader('Authorization', 'Bearer EIrj9uCQgfU8KViWNPp2ZX3tssAd5XXXsyVOWUp3');


      xhr.send(new FormData(lessonForm));
      
    }
    console.log(lessonForm);
</script>






13ba91 - green 
6e00ff -- purple

player.on('playlistchange', function() {
  
  // console.log(x);
  // console.log('Play list changed');
  console.log(player.playlist.currentIndex());
  

});


// console.log(player.playlist.currentIndex());
  // player.playlist.currentIndex()
  // console.log(player.playlist.currentItem());

  // console.log(lessons_list[player.playlist.currentItem()].name);
// console.log(player.playlist.currentItem());

// console.log(player.playlist.indexOf(player.playlist.currentItem()));
  // console.log(player.playlist.currentIndex());
  // console.log(player.currentItem());
  // console.log(player.playlist.currentItem());

  <div style = "border:3px solid #6e00ff; padding:3px;" >
      </div><!-- end of style div  muted autoplay -->


<object data="{{asset('assets/img/website-cover/cover.svg')}}" width="70" height="70" > </object>









           






    <form enctype="multipart/form-data" onsubmit="king();" >
  <input type="text" id = "title1">
  <input type="submit" >
</form>



















































<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>videojs-playlist Demo</title>
  <link href="/node_modules/video.js/dist/video-js.css" rel="stylesheet">
  <style>

    button {
      margin: 1em;
      width: 10em;
    }

    .options {
      margin: 1em;
    }

    .autoadvance-group label {
      margin: 10px;
    }
  </style>
</head>
<body>
  <video class="video-js vjs-default-skin" controls width="640px" height="360px"></video>
  <button class="previous">Previous</button>
  <button class="next">Next</button>
  <div class="options">
    <div class="autoadvance-group">
      <h4>Auto-advance (in seconds)</h4>
      <label><input type="radio" name="autoadvance" value="null" checked> No auto-advance</label>
      <label><input type="radio" name="autoadvance" value="0"> 0</label>
      <label><input type="radio" name="autoadvance" value="5"> 5</label>
      <label><input type="radio" name="autoadvance" value="10"> 10</label>
      <label><input type="radio" name="autoadvance" value="30"> 30</label>
    </div>
    <div class="repeat-group">
      <h4>Repeat</h4>
      <label><input class="repeat" type="checkbox" name="repeat" > Enable Repeat</label>
    </div>
  </div>
  <ul>
    <li><a href="/test/debug.html">Run unit tests in browser.</a></li>
  </ul>
  <script src="/node_modules/video.js/dist/video.js"></script>
  <script src="/dist/videojs-playlist.js"></script>
  <script>
    var videoList = [{
      sources: [{
        src: 'http://media.w3.org/2010/05/sintel/trailer.mp4',
        type: 'video/mp4'
      }],
      poster: 'http://media.w3.org/2010/05/sintel/poster.png'
    }, {
      sources: [{
        src: 'http://vjs.zencdn.net/v/oceans.mp4',
        type: 'video/mp4'
      }],
      poster: 'http://www.videojs.com/img/poster.jpg'
    }, {
      sources: [{
        src: 'http://media.w3.org/2010/05/video/movie_300.mp4',
        type: 'video/mp4'
      }],
      poster: 'http://media.w3.org/2010/05/video/poster.png'
    }];

    var player = videojs(document.querySelector('video'), {
      inactivityTimeout: 0
    });

    try {
      // try on ios
      player.volume(0);
    } catch (e) {}

    player.on([
      'duringplaylistchange',
      'playlistchange',
      'beforeplaylistitem',
      'playlistitem',
      'playlistsorted'
    ], function(e) {
      videojs.log('player saw "' + e.type + '"');
    });

    player.playlist(videoList);

    document.querySelector('.previous').addEventListener('click', function() {
      player.playlist.previous();
    });

    document.querySelector('.next').addEventListener('click', function() {
      player.playlist.next();
    });

    Array.prototype.forEach.call(document.querySelectorAll('[name=autoadvance]'), function(el) {
      el.addEventListener('click', function() {
        var value = document.querySelector('[name=autoadvance]:checked').value;
        player.playlist.autoadvance(Number(value));
      });
    });

    document.querySelector('[name="autoadvance"][value="null"]').click();

    var repeatCheckbox = document.querySelector('.repeat');

    repeatCheckbox.addEventListener('click', function() {
      player.playlist.repeat(this.checked);
    });

    repeatCheckbox.checked = false;
  </script>
</body>
</html>




if (player) {player.dispose()} else {var player}
player = videojs('player', {
    //options
});

// fluid: true , 
    // aspectRatio: '4:3 '  ,
    // playbackRates :[ 0.5 , 1 , 1.25] , 
    // stopButton:true, 
    // frameNavigation:true, 
    // frameRate:24, 
    // smpte:true, 
    


  // console.log(player.currentTime()) ; 
  // video.play();
  // video.pause(); 





WEBSITE JUNK 



@extends('layouts.websiteApp')
@section('content')
  <header class="header header-transparent" id="header-main">
    <!-- Topbar -->
    <div id="navbar-top-main" class="navbar-top  navbar-dark border-bottom">
      <div class="container px-0">
        <div class="navbar-nav align-items-center">
          <div class="d-none d-lg-inline-block">
          <a class="navbar-brand" href="#"><object data="{{asset('assets/img/brand/logo.svg')}}" width="70" height="70" > </object></a>
          </div>
          <div class="ml-auto">
            <ul class="nav">
              @if (Route::has('login'))
                @auth
                  <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link text-sm text-gray-700 underline">Dashboard</a>
                 </li>
                @else
                  <li class="nav-item">
                <a href="{{ route('login') }}" class=" nav-link text-sm  text-gray-700 underline">Login</a>
                </li>
                  @if (Route::has('register'))
                    <li class="nav-item">
                   <a href="{{ route('register') }}" class="nav-link  text-sm text-gray-700 underline">Register</a>
                   </li>
                  @endif
                @endauth
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="main-content">
    <!-- Header (v1) -->
    <section class="header-1 section-rotate bg-section-secondary" data-offset-top="#header-main" style="padding-top: 147.4px;">
      <div class="section-inner bg-gradient-primary"></div>
      <!-- SVG illustration -->
      <div class="pt-7 position-absolute middle right-0 col-lg-7 col-xl-6 d-none d-lg-block">
        <figure class="w-100" style="max-width: 1000px;">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="b163acb8-d7e3-44ae-95e8-546cddd31e63" data-name="Layer 1" width="1077.87" height="813.02" viewBox="0 0 1077.87 813.02" class="injected-svg svg-inject img-fluid" style="height: 1000px;"><defs><linearGradient id="198f78e2-ec49-403a-9acf-506373c5226e-2" x1="975.77" y1="484.92" x2="975.77" y2="87.89" gradientTransform="translate(-77.03)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="gray" stop-opacity="0.25"></stop><stop offset="0.54" stop-color="gray" stop-opacity="0.12"></stop><stop offset="1" stop-color="gray" stop-opacity="0.1"></stop></linearGradient><linearGradient id="6e777f18-a157-4954-9b1f-a7cbf36b1989-2" x1="649.11" y1="832.85" x2="649.11" y2="382.11" gradientTransform="matrix(1, 0, 0, 1, 0, 0)" xlink:href="#198f78e2-ec49-403a-9acf-506373c5226e"></linearGradient></defs><title>work chat</title><path d="M724.89,154.84c-46.25,39.26-106.24,36.72-158.81,16.29S465.22,114.34,414,88.49c-42.94-21.67-88-35.9-133.61-42.23-65.28-9.06-138.18,2-183.66,65.44-50.65,70.68-46.76,198.16,8,263,27.87,33,64.36,49.2,96.18,75S262.2,518.26,259.49,568c-2.51,46-31.68,81.37-61.87,103.54-23.33,17.13-52.06,35.84-54.87,71.33-2.72,34.33,21.44,61.24,44.51,76.54,75.26,49.91,168,49.43,243-1.26C457,800.06,481.56,776,509.61,761.92c73.65-37,154.81.24,232.8,13.87,66,11.53,133.69,5.55,198-17.48,38.62-13.83,77.39-35,104.52-74.36,19.57-28.4,31.76-64.35,43.2-99.85q18.3-56.77,35.19-114.36c6.75-23.05,13.4-46.54,15.15-71.19,3.16-44.68-10.16-88.85-28.3-126.55C1067.1,182.47,994.56,119.52,916,103.53S754.33,118.77,693.4,187.11" transform="translate(-61.06 -43.49)" fill="#510fa8" opacity="0.1"></path><ellipse cx="489.56" cy="532.53" rx="226.98" ry="10.36" fill="#510fa8" opacity="0.1"></ellipse><path d="M543,533.24c-113.47,0-205.78-92.31-205.78-205.78S429.5,121.68,543,121.68,748.75,214,748.75,327.46,656.43,533.24,543,533.24Zm0-409.56c-112.37,0-203.78,91.42-203.78,203.78S430.6,531.24,543,531.24s203.78-91.42,203.78-203.78S655.33,123.68,543,123.68Z" transform="translate(-61.06 -43.49)" fill="#fff"></path><path d="M543,487.06c-88,0-159.61-71.6-159.61-159.6S455,167.86,543,167.86s159.6,71.6,159.6,159.6S631,487.06,543,487.06Zm0-317.2c-86.91,0-157.61,70.7-157.61,157.6s70.7,157.6,157.61,157.6,157.6-70.7,157.6-157.6S629.87,169.86,543,169.86Z" transform="translate(-61.06 -43.49)" fill="#fff"></path><path d="M543,437.46a110,110,0,1,1,110-110A110.13,110.13,0,0,1,543,437.46Zm0-218a108,108,0,1,0,108,108A108.13,108.13,0,0,0,543,219.46Z" transform="translate(-61.06 -43.49)" fill="#fff"></path><ellipse cx="979.99" cy="403.16" rx="14.27" ry="4.72" fill="#510fa8" opacity="0.1"></ellipse><ellipse cx="178.55" cy="651.82" rx="84.04" ry="13.79" fill="#510fa8" opacity="0.1"></ellipse><g opacity="0.1"><path d="M386.93,313.21H130.54a13.44,13.44,0,0,0-13.4,13.4v162a13.44,13.44,0,0,0,13.4,13.4H331.67s5.21,27.66-11.91,30.64c0,0,38.34,2.75,31.64-30.64h35.53a13.44,13.44,0,0,0,13.4-13.4v-162A13.44,13.44,0,0,0,386.93,313.21Z" transform="translate(-61.06 -43.49)"></path><g opacity="0.2"><rect x="93.82" y="312.72" width="207.7" height="12.66" rx="5.67" ry="5.67"></rect><rect x="93.82" y="369.3" width="207.7" height="12.66" rx="5.67" ry="5.67"></rect><rect x="93.82" y="397.58" width="174.18" height="12.66" rx="5.67" ry="5.67"></rect><rect x="93.82" y="341.01" width="90.06" height="12.66" rx="5.67" ry="5.67"></rect></g></g><path d="M389.17,312.09H132.77a13.44,13.44,0,0,0-13.4,13.4v162a13.44,13.44,0,0,0,13.4,13.4H333.9s5.22,27.66-11.91,30.63c0,0,38.34,2.75,31.64-30.63h35.54a13.43,13.43,0,0,0,13.39-13.4v-162A13.43,13.43,0,0,0,389.17,312.09Z" transform="translate(-61.06 -43.49)" fill="#fff"></path><g opacity="0.2"><rect x="96.06" y="311.6" width="207.7" height="12.66" rx="5.67" ry="5.67" fill="#510fa8"></rect><rect x="96.06" y="368.18" width="207.7" height="12.66" rx="5.67" ry="5.67" fill="#510fa8"></rect><rect x="96.06" y="396.47" width="174.18" height="12.66" rx="5.67" ry="5.67" fill="#510fa8"></rect><rect x="96.06" y="339.89" width="90.06" height="12.66" rx="5.67" ry="5.67" fill="#510fa8"></rect></g><path d="M294,309.52l-14.21,30.22s-2.1,5.67-3.45,6.72-7.32,19-7.32,19L253.79,389h0l-1,1.6-6-1.65-4.19-15.67.26-4.55,0-.57s9.43-9.86,11.52-10.61c0,0,1.64.19,4.79-7.45s6-9.3,6-9.3l1.64-5.54,17.66-28.11s14.8-21.23,18.83-11.81S294,309.52,294,309.52Z" transform="translate(-61.06 -43.49)" fill="#ffd2c6"></path><path d="M235,524.17a3.4,3.4,0,0,1-.48,1.45c-1.64,2.39-10.91,51.29-10.91,51.29.74,3.3-1.34,9.88-2.7,12.87s-4.34,18.54-4.34,18.54-.74,33.5-2.68,38.73.62,16.45.62,16.45c-.19,5.16,2.91,10.61,4.75,13.39.14.18.25.36.36.51.6.86,1,1.35,1,1.35a7.79,7.79,0,0,0,2.09,2.59c.13.11.27.21.42.32a23.81,23.81,0,0,0,8.38,3.54l.29.06c1.2.27,2,.37,2,.37l.74,4-7.92,1.64-15.1,1s-17.8,1.35-13.76-6.58a12.54,12.54,0,0,0,.73-1.68h0c.15-.38.29-.78.41-1.18,2.43-7.62.79-16.88.79-16.88L196.21,639c-5.67-25.12,4.48-53.09,4.48-53.09s-.89-2.24,1.06-7.92,0-18.09,0-18.09-1-16-2.39-23.93a48.35,48.35,0,0,1-.54-10.07,50.3,50.3,0,0,1,.54-5.9l34.1-4.52S235.38,521,235,524.17Z" transform="translate(-61.06 -43.49)" fill="#ffd2c6"></path><path d="M234.5,689.68l-7.92,1.64-15.1,1s-17.8,1.35-13.76-6.58a12.54,12.54,0,0,0,.73-1.68h0c.15-.38.29-.78.41-1.18a27.39,27.39,0,0,1,9,1.82c5.07,2,8.89-3.15,8.89-3.15l2.46-4.7.36-.68c.6.86,1,1.35,1,1.35a8,8,0,0,0,2.51,2.9l-.42.88-2.39,5s3.06.31,7.25,1a3.24,3.24,0,0,0,3.94-2.16l.29.06c1.2.27,2,.37,2,.37Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M241.83,693.41c-.6,2.69-17.27,3.52-17.27,3.52s-9.28-.9-11.88,1.27-10.26,1.65-10.56,1.65-4.33-.16-5.91-7.4c-1.53-7.06,2.06-8.29,2.24-8.35h0a27.13,27.13,0,0,1,9.43,1.83c5.07,2,8.89-3.14,8.89-3.14l2.82-5.39c.6.86,1,1.35,1,1.35a7.9,7.9,0,0,0,2.51,2.91l-2.81,5.91s3.06.31,7.25,1c3.35.54,4.08-2.19,4.23-3.29a3.4,3.4,0,0,0,0-.45s2.61.75,5.82,1.65A6,6,0,0,1,241.83,693.41Z" transform="translate(-61.06 -43.49)" fill="#626696"></path><path d="M273.24,559.81c-.4,2.39-.81,8.58-.81,8.58,1.4,5.18-2.19,17.49-2.19,17.49l-1.79,7c.8,9-4.93,30.91-4.93,30.91s-3.84,20.34-5.84,29.12a24.21,24.21,0,0,0,1,14.66c.1.24.16.36.16.36,0,.17.07.33.12.49s.13.48.21.71a10.8,10.8,0,0,0,2,3.34,10.12,10.12,0,0,0,1.07,1.1l.06.06a21.64,21.64,0,0,0,6.36,3.91h0l1,.4a30.07,30.07,0,0,0,3.17,1h0a3.29,3.29,0,0,0,.36.08l-.81,4.7-10.56-2.7-14.15-4.59-7-4s.08-.38.22-1.11c0,0,0-.08,0-.12.06-.31.12-.68.21-1.1C242.29,664,245,646.7,243.64,634c-1.69-15.75,4.87-37.49,6.47-42.67a25.87,25.87,0,0,0,1.2-9.17c-2.6-3.8-3.2-18.94-3.2-18.94s-4.78-9.78-8.74-20.15a53,53,0,0,1-2.85-10.48,36.65,36.65,0,0,1-.58-7.66s32.12-29.31,35.64-.93c.12,1,.23,1.88.34,2.78C275,552.72,273.62,557.5,273.24,559.81Z" transform="translate(-61.06 -43.49)" fill="#ffd2c6"></path><path d="M273.24,679.05l-.81,4.7-10.56-2.7-14.15-4.59-7-4s.08-.38.22-1.11c0,0,0-.08,0-.12.06-.31.12-.68.21-1.1l1-.1h.08a13.32,13.32,0,0,1,5.93.8c2.3.87,5.32,1.86,5.94,1.44a7.56,7.56,0,0,1,3.39-.6l1.47-3.22.21-.49a10.68,10.68,0,0,0,2,3.34,11.29,11.29,0,0,0,1.13,1.16l-.06,1.14-.08,1.61a20.58,20.58,0,0,0,5.08,2.35,2.94,2.94,0,0,0,1.42,0h0l1,.4a30.07,30.07,0,0,0,3.17,1h0A3.29,3.29,0,0,0,273.24,679.05Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M268,689.08c-2.95-.85-10.06-2.2-11.21-1.15s-11,0-11,0a6,6,0,0,1-5.09-3c-2-3.19-.39-13.51-.39-13.51l.73-.07,1.22-.12h.08a13.17,13.17,0,0,1,5.93.8c2.3.86,5.32,1.85,5.94,1.44a7.42,7.42,0,0,1,3.39-.6l1.68-3.71a10.8,10.8,0,0,0,2,3.34,11.29,11.29,0,0,0,1.13,1.16l-.14,2.75a20.71,20.71,0,0,0,5.08,2.34,2,2,0,0,0,2.44-.77,1.51,1.51,0,0,0,.18-.41h0c.09.17,1.06.5,4.17,1.39h0c3.38-.19,6.64,1.28,8.14,5.86S270.89,689.92,268,689.08Z" transform="translate(-61.06 -43.49)" fill="#626696"></path><path d="M235,524.17c-.66.19-1.26.37-1.82.55a25.23,25.23,0,0,1-4.41.93c-9.43,1.33-25,.53-29.93.22a50.3,50.3,0,0,1,.54-5.9l34.1-4.52S235.38,521,235,524.17Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M264.72,515.89s-12.52,1.94-22.7,4.17c-3.4.74-6.54,1.51-8.86,2.27a27.21,27.21,0,0,1-4.41.93c-11.34,1.59-31.48.12-31.48.12-5.53-17.94,6.72-40.53,6.72-40.53-.29-1.8,2.55-7.32,2.55-7.32l.05-.18,1.74-6.4h46.51l.57,2.75,1.18,5.6,7.3,34.67Z" transform="translate(-61.06 -43.49)" fill="#626696"></path><path d="M271.92,526.77l-.28.12-5.44,2.41c-5.89,2.72-23.52,3.23-29.68,3.28a36.65,36.65,0,0,1-.58-7.66s32.12-29.31,35.64-.93C271.7,525,271.81,525.87,271.92,526.77Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M272.78,524l-1.14.5-5.44,2.42c-6,2.76-24.19,3.25-30,3.28h-1.53c-2.69-.09-5.38-2.61-5.38-3.27,0-.36-.28-2.13-.52-3.65-.2-1.22-.38-2.27-.38-2.27s-12-5.18-18.09-9.37c-4.57-3.11-3.42-25.21-2.53-36.32.31-3.83.58-6.35.58-6.35l47.08,2.75,6.6.38,3.78.84,1,.21s2.7,19.74,4,21.38.46,7.18.3,10.33a19.19,19.19,0,0,1-.44,4s1.94,5.54,1.48,8.64A17.23,17.23,0,0,0,272.78,524Z" transform="translate(-61.06 -43.49)" fill="#626696"></path><circle cx="161.33" cy="297.29" r="19.29" fill="#ffd2c6"></circle><path d="M213,348.83s1.34,18.27-2.39,22.46-13.46,12.11-13.46,12.11l3,12.41,16.9,1.95,19.74-21.09-4.49-5.53s-3.44-11.67-.6-17.5S213,348.83,213,348.83Z" transform="translate(-61.06 -43.49)" fill="#ffd2c6"></path><path d="M253.79,389h0l-1,1.6-6-1.65-4.19-15.67.26-4.55,1.23-1.77s6.58.16,6.29,6.14C250.09,378.35,253.08,387,253.79,389Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M266.8,475.53s-4.76,1.06-10.21,1.77-11.74,1.07-14.32-.43c-4.33-2.56-27.79-1.83-34.52-1.57-.48,0-.86,0-1.16.05l1.74-6.4h46.51l.57,2.75,6.6.38,3.78.84C266.42,474.47,266.8,475.53,266.8,475.53Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M242.88,368.15s6.58.15,6.28,6.13,3.59,16.3,3.59,16.3l-1.5,3.44s-2.09,8.37-.45,10.47,7.63,2.09,4.19,19.29c0,0-.74,12.86,1.05,17.05s1.79,14.2,4.48,18.39,6.29,13.91,6.29,13.91-19.45,4.33-24.53,1.34S205.94,473,205.94,473s.15-5.24,0-5.83a5,5,0,0,1,.75-3.82c1-1.42,2.69-3.81,1.79-5.9s2.25-5.18.6-8.42-3.65-3.89-3.25-5.66-.64-4.17-1.83-5.66-9.28-17.3-9.28-17.3L193.38,413s-10.41-7.63-10.22-11.22,3.94-8.56,3.94-8.56l10-9.83s5.53,6,10.91,3.89S225,375.17,225,375.17s4.14-2.24,4.44-3.88,2.84-.15,2.84-.15,3.74-2.05,4.49-1.33,4,1.33,4,1.33Z" transform="translate(-61.06 -43.49)" fill="#ffcde5"></path><path d="M186.35,399.3l-3.19,2.49s-3.24,5.84-4,16.3-4,25.26-4,25.26l-6.28,11.23S158.53,476.25,157.19,482s-7.48,15.48-7.48,15.48-20.79,18.68-6.28,22,14.95-14.87,14.95-14.87,3.39-3.74,3.94-6.28,18.94-35.07,18.94-35.07,6.44-8.75,5.09-13.38c0,0,8.37-19.69,8.37-24.63A87.48,87.48,0,0,0,193.38,413l1.34-10.32Z" transform="translate(-61.06 -43.49)" fill="#ffd2c6"></path><path d="M229.42,440.53s-14.66,7.67-17.5,8.07S224.33,447,224.33,447Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M241.38,446.51s-19.44,6.58-28,5.38C213.42,451.89,234.65,455.93,241.38,446.51Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M242.58,448.66s-17.5,11-27.82,9.21c0,0,24.08,4.79,27.82,2.25l-10.77-3S243.78,450.8,242.58,448.66Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M222.42,306.84c-5.06-1-10.67-.4-14.72,2.78-3,2.36-5,6-8.37,7.72a49.24,49.24,0,0,1-5.47,1.93,15.78,15.78,0,0,0-9.63,17c.53,3,1.92,5.7,2.6,8.62,1.22,5.22.15,10.69-1.18,15.88A167.1,167.1,0,0,1,169,402a4.32,4.32,0,0,0-.83,2.77,4,4,0,0,0,1,1.77c6.91,8,18.16,10.73,28.72,11.09,3.89.13,8,0,11.38-1.89a17.2,17.2,0,0,0,5.55-5.09A27,27,0,0,0,220,393.24c-.29-5-2-10.09-.71-14.94a4,4,0,0,1,.9-1.83c1.14-1.16,3-.86,4.64-1.05,4.39-.51,7.23-5.14,7.75-9.52s-.58-8.81-.6-13.22a27.69,27.69,0,0,1,5.21-16.28c1.46-2,3.33-4,3.82-6.51.62-3.15-1.21-5.47-2.79-8-2.45-3.88-3.65-8.41-7.38-11.37A19.92,19.92,0,0,0,222.42,306.84Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M221.22,305.64c-5.05-1-10.67-.4-14.72,2.79-3,2.35-5,6-8.37,7.72a48.32,48.32,0,0,1-5.46,1.92,15.79,15.79,0,0,0-9.64,17c.53,3,1.92,5.7,2.61,8.63,1.22,5.22.14,10.68-1.18,15.87a167.2,167.2,0,0,1-16.62,41.23,4.23,4.23,0,0,0-.82,2.76,3.85,3.85,0,0,0,1,1.77c6.92,8,18.16,10.73,28.72,11.09,3.89.14,8,0,11.38-1.88a17.24,17.24,0,0,0,5.55-5.1,27,27,0,0,0,5.15-17.37c-.29-5-2-10.09-.7-14.95a4,4,0,0,1,.89-1.83c1.14-1.16,3-.86,4.65-1,4.39-.51,7.22-5.14,7.74-9.53s-.57-8.8-.6-13.22A27.69,27.69,0,0,1,236,335.21c1.46-2,3.32-4,3.81-6.52.62-3.15-1.2-5.46-2.78-8-2.45-3.88-3.65-8.41-7.39-11.36A19.82,19.82,0,0,0,221.22,305.64Z" transform="translate(-61.06 -43.49)" fill="#985c7e"></path><path d="M214.76,492.62s3.84,17.94,10.22,22.83Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><g opacity="0.1"><path d="M184.17,339.07c-.2-.7-.43-1.4-.67-2.09C183.7,337.68,183.93,338.38,184.17,339.07Z" transform="translate(-61.06 -43.49)"></path><path d="M238.73,323.41a6.49,6.49,0,0,1-.08,1.69c-.5,2.53-2.36,4.5-3.82,6.52a27.61,27.61,0,0,0-5.21,16.27c0,4.42,1.11,8.83.59,13.22s-3.35,9-7.74,9.53c-1.62.19-3.51-.12-4.64,1a4,4,0,0,0-.9,1.83c-1.27,4.86.42,9.94.7,14.95a27,27,0,0,1-5.14,17.37,17.34,17.34,0,0,1-5.55,5.1c-3.43,1.85-7.49,2-11.39,1.88-10.38-.35-21.42-3-28.36-10.71a2.74,2.74,0,0,0-.17,1.44,3.85,3.85,0,0,0,1,1.77c6.92,8,18.16,10.73,28.72,11.09,3.89.14,8,0,11.38-1.88a17.34,17.34,0,0,0,5.55-5.1,27,27,0,0,0,5.15-17.37c-.29-5-2-10.09-.7-14.95a4,4,0,0,1,.89-1.83c1.14-1.16,3-.86,4.65-1,4.39-.51,7.22-5.14,7.74-9.53s-.57-8.8-.6-13.22A27.69,27.69,0,0,1,236,335.21c1.46-2,3.32-4,3.81-6.52A7.41,7.41,0,0,0,238.73,323.41Z" transform="translate(-61.06 -43.49)"></path></g><path d="M582.33,807.47s-38.05-2.3-33.56,24.36c0,0-.89,4.71,3.38,6.85,0,0,.07-2,3.9-1.3a17.51,17.51,0,0,0,4.13.2,8.63,8.63,0,0,0,5.06-2.09h0s10.69-4.42,14.85-21.9c0,0,3.08-3.81,3-4.79l-6.42,2.74s2.19,4.63.46,8.48c0,0-.2-8.31-1.44-8.11-.25,0-3.33,1.6-3.33,1.6s3.77,8.07.92,13.93c0,0,1.08-9.94-2.1-13.34l-4.52,2.63s4.41,8.34,1.42,15.14c0,0,.77-10.43-2.37-14.49l-4.1,3.19s4.15,8.21,1.62,13.85c0,0-.33-12.14-2.51-13,0,0-3.58,3.15-4.12,4.45,0,0,2.83,6,1.07,9.11,0,0-1.08-8.09-2-8.12,0,0-3.57,5.36-3.94,9a19.48,19.48,0,0,1,3.07-9.55,10.71,10.71,0,0,0-5.46,2.83s.55-3.79,6.34-4.12c0,0,3-4.06,3.74-4.31,0,0-5.76-.48-9.25,1.07,0,0,3.07-3.58,10.31-2l4-3.3s-7.58-1-10.8.11c0,0,3.7-3.17,11.89-.86l4.4-2.64s-6.46-1.39-10.31-.89c0,0,4.06-2.19,11.6.19l3.15-1.42s-4.74-.93-6.12-1.07-1.46-.53-1.46-.53a16.36,16.36,0,0,1,8.89,1S582.44,807.89,582.33,807.47Z" transform="translate(-61.06 -43.49)" fill="#510fa8"></path><ellipse cx="495.06" cy="797.52" rx="26.93" ry="4.55" fill="#510fa8" opacity="0.1"></ellipse><path d="M880.44,774.87s-38-2.29-33.56,24.37c0,0-.89,4.71,3.38,6.85,0,0,.07-2,3.9-1.31a17.62,17.62,0,0,0,4.14.2,8.54,8.54,0,0,0,5.05-2.09h0s10.7-4.41,14.85-21.89c0,0,3.08-3.82,3-4.8L874.74,779s2.19,4.63.47,8.48c0,0-.21-8.32-1.44-8.12-.25,0-3.34,1.6-3.34,1.6s3.77,8.07.93,13.94c0,0,1.08-9.94-2.11-13.35l-4.52,2.64s4.41,8.33,1.42,15.13c0,0,.77-10.43-2.37-14.49L859.69,788s4.14,8.22,1.61,13.86c0,0-.33-12.15-2.5-13.06,0,0-3.58,3.16-4.13,4.46,0,0,2.84,6,1.08,9.1,0,0-1.08-8.08-2-8.12,0,0-3.57,5.36-3.94,9a19.45,19.45,0,0,1,3.08-9.55,10.76,10.76,0,0,0-5.47,2.83s.56-3.78,6.35-4.12c0,0,3-4.06,3.74-4.31,0,0-5.76-.48-9.26,1.07,0,0,3.08-3.58,10.31-1.95l4-3.3s-7.59-1-10.8.11c0,0,3.7-3.16,11.89-.86l4.4-2.63s-6.47-1.4-10.32-.89c0,0,4.06-2.19,11.61.18l3.15-1.41s-4.74-.93-6.13-1.08-1.46-.53-1.46-.53a16.39,16.39,0,0,1,8.9,1S880.56,775.29,880.44,774.87Z" transform="translate(-61.06 -43.49)" fill="#510fa8"></path><ellipse cx="793.17" cy="764.92" rx="26.93" ry="4.55" fill="#510fa8" opacity="0.1"></ellipse><ellipse cx="848.09" cy="436.83" rx="77.55" ry="12.72" fill="#510fa8" opacity="0.1"></ellipse><path d="M999.44,229.49c3.17-10.63,0-21.26,0-21.26v-10s3.62-19.61-12.5-32.19l-10.7-9.43s-6-5.14-7.73-5.47a7.85,7.85,0,0,0-1-.15l-.32-.18a32.21,32.21,0,0,1-2.34-4.93,4.57,4.57,0,0,0,3.81-1.3,5,5,0,0,0,.9-1.5h0c.62-1.39.72-3.07,1.25-4.55a10.62,10.62,0,0,1,2-3.27c-.11.18-.22.35-.32.53,1.51-1.88,3.49-3.5,4.9-5.49a12,12,0,0,0,.78-1.22l-.21.25c2-3.16,2.57-7,3.14-10.68a9.64,9.64,0,0,0,.06-3.82,12.73,12.73,0,0,0-1.07-2.42c-2.32-4.8-2.27-10.82-6-14.65-2.79-2.87-7-3.75-11-4.24s-8.17-.77-11.59-2.86a12.55,12.55,0,0,0-3.14-1.73,2.59,2.59,0,0,0-3.09,1.15,2,2,0,0,1-.41.83,1.33,1.33,0,0,1-1.19.07l-5.3-1.42.06.27-.13,0,.19.84c.17,0,.35,0,.5.29l-.85,1.31a13.13,13.13,0,0,1-4.79-1,2.26,2.26,0,0,0,0,.26l-.07,0c-.1,1.5,1.6,2.47,2.12,3.88a2.94,2.94,0,0,1,0,1.9,4.32,4.32,0,0,1-1,1.52c-1.89,1.86-4.29,1.49-6.46,2.67a1.38,1.38,0,0,0-.79.87.67.67,0,0,0-.07.48,1.12,1.12,0,0,0,.44.55,10,10,0,0,0,2.06,1.28l-.62.6a23.74,23.74,0,0,0,8.2,38.71c.08.41.14.83.2,1.28,0,0,0,.08,0,.12l.06.57-7.15,3a5.69,5.69,0,0,1-5.12-3.29c-1.66-3.44-7.53,0-7.53,0s-17.93-1.35-24.56,1.95c0,0-10.7-4.49-12.2-4.79s-3.77-1.5-4.83-1.2-2.41-2-3.16-1.8-1-1.49-3.46-2.09-3.32.15-6-2.55-24.71-13.32-24.71-13.32l-9.94-8.09-10.55-8.38-.19.35c-.06-.25-.13-.51-.2-.78a100,100,0,0,0-3.91-12.3c-.68-1.62-1-3.67-1.89-2.59-.56.65-1.52-.77-3-1.73a2.49,2.49,0,0,0-3.72,1.08h0c-8.21,12.87-11.15,13.8-6.39,18.51,4.23,4.2,7.05,7.91,10.51,9l.41.13a.58.58,0,0,1-.23,0l20,23.95s14.46,12.58,24.41,16.62,9.19,5.24,9.19,5.24,30.13,15.27,34.8,15,3.77,31.29,1.81,36.38-5.12,41.92-5.12,41.92-3,7.78.15,13.17c0,0,.7,10.32.07,12.79-2.75,4.23-6.66,11.41-7.3,18.8,0,.39-.08.76-.12,1.14a2.59,2.59,0,0,1-.71.58s.26-.06.67-.2a38,38,0,0,1-2,9,36.67,36.67,0,0,0-2.46,13v23.79L881,363s-2.41,11.17,0,13.77a6.33,6.33,0,0,1,1.32,4.59,8.5,8.5,0,0,0,1.54,5.35,4.06,4.06,0,0,1,1,3.44c-.8,2.59,1.18,30.13,1.18,30.13s-.58,7.59-1.38,8S886,437,886,437s-8.14,6.79-6.07,10.39l2.08,3.19-.55.54-.34.34a3.17,3.17,0,0,0-2.07-.39,77.61,77.61,0,0,1-8.19,7.29c-3.67,2.65-13.66,6.49-13.66,6.49l-7.88.64h-.15s-3.77-.35-1.66,5.49,21,4,21,4l11-1.74s19.68.09,25.31-1.15c2.36-.53,2.92-1.78,2.77-3.06,0,0,0,0,0,0l-.06-.06a7.86,7.86,0,0,0-1.61-3.31,1.56,1.56,0,0,0-.14-.17l.36-4c8.35-4.81-2.36-14.28-2.36-14.28s3.66-8,5.55-10.57,1.88-40.72,1.88-40.72,1-13.78-1.61-17a5.75,5.75,0,0,1,2.81-5.19c1.86-1.27,7.48-18.76,11.89-33.28l2.78,17.11s-.6,8.18,1.21,10.58a4.07,4.07,0,0,1,.74,3.18,14.15,14.15,0,0,0,.41,6.93,4.48,4.48,0,0,0,1.45,2.46c1.61.8,1.71,3.65,2.31,4.25s4.32-.85,4.52,1.34a48.94,48.94,0,0,1,0,5.79l1.21,35.53s-2,3-2.41,10.78c-.17,3.36-.8,5.27-1.45,6.36a3.25,3.25,0,0,0,.3,3.82l.35.4-1.49,1.15a3.25,3.25,0,0,0-.92,4,3.21,3.21,0,0,0-.93,3.45,4,4,0,0,0,.26.56,5.63,5.63,0,0,0-3,1.48,24.6,24.6,0,0,1-5.3,5.34,99.92,99.92,0,0,0-8.46,7.24,12.14,12.14,0,0,1-4.94,4,8,8,0,0,1-1.49.44c-4,.81-2.71,4.95.5,5.6s13.86,3.94,22.15,2c0,0,2.46,1,6.07-.84S950,479.4,950,479.4s4.52,0,5.12-1.8a6.89,6.89,0,0,0,.26-1.75l.13-.12-.12-.11a23.56,23.56,0,0,0-.31-4c-.11-.68-.24-1.3-.36-1.79-.39-1.5-1.1-3.43-1.41-4.25a1.53,1.53,0,0,0,.14-.21c1.72-2.91-1.14-10-1.14-10a19.11,19.11,0,0,1,3.41-4c1.61-1.19,5.83-32.33,5.83-32.33s-.2-8,2-11.58-3-25.35-3-25.35-2.21-5-1.4-6.79-.81-8.38-.81-8.38v-7.86a8.64,8.64,0,0,0-.46-2.76c-.62-1.85-1.54-5.4-.54-8,1.41-3.59,4.62-25.75,4.62-25.75s-2.51-9.77,1.16-17.55a16.79,16.79,0,0,1,1-1.81c2.72-4.28,1.91-11.88.57-18-.21-.95-.43-1.86-.65-2.73-.1-.37-.2-.72-.29-1.07l.43-.18s0-.59.13-1.58a11,11,0,0,0,7.25-5s9.19-10.33,17.33-14.67,8.74-10.63,8.74-10.63c-1.21-2.1,2.15-10.63,2.15-10.63Zm-32-78.38Zm5.53,92.15-8.7,10.09a.21.21,0,0,1,0-.06c-2.26-3.14,2.11-10.18,2.11-10.18L973.57,227c-.06,2.08-.31,3.9-.94,4.76-2,2.7,3.61,7.19,3.61,7.19C973.23,238.92,972.93,243.26,972.93,243.26Z" transform="translate(-61.06 -43.49)" fill="url(#198f78e2-ec49-403a-9acf-506373c5226e-2)"></path><path d="M819.74,111,815,120.21a18.35,18.35,0,0,1-4.42-.92,16.77,16.77,0,0,1-10.38-9c-4.24-9.38,2.78-15.44,6.05-17.22s6.3-3.83,8.75,2a101.43,101.43,0,0,1,3.86,12.22C819.4,109.51,819.74,111,819.74,111Z" transform="translate(-61.06 -43.49)" fill="#cc818c"></path><path d="M970.66,159l-7.58,11.31s-35.86,17.1-29-3c3-8.85,3.37-15.33,2.83-19.81,0,0,0-.08,0-.12-.7-5.6-2.81-8-2.81-8s34.95-17.88,29.75-5.65a17,17,0,0,0-1.24,8.05,27.42,27.42,0,0,0,3.77,11.17A37,37,0,0,0,970.66,159Z" transform="translate(-61.06 -43.49)" fill="#cc818c"></path><path d="M959.8,382.79s5.16,21.62,3,25.19-2,11.5-2,11.5-4.17,30.95-5.76,32.14a19,19,0,0,0-3.37,4s2.83,7,1.13,9.9a2.35,2.35,0,0,1-1.13,1c-2.66,1.12-12.48-3.85-18.07-6.9a3.08,3.08,0,0,1-1.48-1.77,3.15,3.15,0,0,1,.91-3.42,3.26,3.26,0,0,1,.91-4l1.47-1.14-.34-.4a3.25,3.25,0,0,1-.3-3.8c.64-1.08,1.26-3,1.43-6.31.4-7.74,2.38-10.71,2.38-10.71l-1.19-35.31a50.69,50.69,0,0,0,0-5.75c-.2-2.18-3.87-.74-4.46-1.34s-.7-3.42-2.28-4.22a4.44,4.44,0,0,1-1.44-2.44,14.22,14.22,0,0,1-.41-6.89,4.06,4.06,0,0,0-.73-3.16c-1.79-2.38-1.19-10.51-1.19-10.51l-2.74-17c-4.36,14.43-9.91,31.81-11.74,33.07a5.72,5.72,0,0,0-2.78,5.16c2.58,3.17,1.59,16.86,1.59,16.86s0,37.88-1.86,40.46-5.48,10.51-5.48,10.51,10.63,9.46,2.27,14.23l-.09.05c-8.53,4.76-26.18-8.52-26.18-8.52l1.84-1.84.54-.54-2-3.18c-2.05-3.57,6-10.31,6-10.31s-2.14-8.33-1.35-8.73,1.35-7.94,1.35-7.94-1.95-27.37-1.16-29.94a4,4,0,0,0-.94-3.42,8.54,8.54,0,0,1-1.52-5.31,6.32,6.32,0,0,0-1.3-4.56c-2.38-2.58,0-13.69,0-13.69l2-14.68V325.75a37,37,0,0,1,2.4-13.12,39.6,39.6,0,0,0,2.16-10.56c.65-7.52,4.69-14.83,7.41-19,1.44-2.2,2.51-3.52,2.51-3.52l63.47-2.49s1,2.83,2,6.76c.22.86.44,1.76.64,2.71,1.33,6.1,2.13,13.65-.56,17.91a14.09,14.09,0,0,0-1,1.79c-3.63,7.73-1.15,17.44-1.15,17.44s-3.17,22-4.56,25.59c-1,2.53-.08,6.06.54,7.9a8.79,8.79,0,0,1,.45,2.74v7.81s1.59,6.54.8,8.33S959.8,382.79,959.8,382.79Z" transform="translate(-61.06 -43.49)" fill="#444053"></path><path d="M962.72,305a16.43,16.43,0,0,0-1,1.79l-3.57-.2c.34-1.84-2.09-19.09-2.09-19.09l7.2-.41C964.6,293.23,965.41,300.79,962.72,305Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M963.31,304.45a14.09,14.09,0,0,0-1,1.79l-3.58-.2c.35-1.84-2.08-19.1-2.08-19.1l7.19-.4C965.2,292.64,966,300.19,963.31,304.45Z" transform="translate(-61.06 -43.49)" fill="#444053"></path><path d="M963.31,304.45a14.09,14.09,0,0,0-1,1.79l-3.58-.2c.35-1.84-2.08-19.1-2.08-19.1l7.19-.4C965.2,292.64,966,300.19,963.31,304.45Z" transform="translate(-61.06 -43.49)" opacity="0.05"></path><path d="M952.8,465.49a2.35,2.35,0,0,1-1.13,1c-2.66,1.12-12.48-3.85-18.07-6.9a3.08,3.08,0,0,1-1.48-1.77c3.18-.58,5.27,3,5.27,3a4.69,4.69,0,0,1,6.54,1.59c2.73,4,8.58,2.32,8.58,2.32S952.63,465,952.8,465.49Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M954.45,477.65c-.6,1.78-5.06,1.78-5.06,1.78s-8,2.29-11.56,4.07-6,.84-6,.84c-8.19,1.89-18.7-1.38-21.87-2s-4.42-4.76-.5-5.55a7.84,7.84,0,0,0,1.47-.45,11.94,11.94,0,0,0,4.88-4,101.18,101.18,0,0,1,8.35-7.2,24.16,24.16,0,0,0,5.24-5.3c4.66-4.12,8,1.54,8,1.54a4.69,4.69,0,0,1,6.54,1.59c2.73,4,8.58,2.32,8.58,2.32s1,2.68,1.54,4.61c.12.49.25,1.11.36,1.79A15.65,15.65,0,0,1,954.45,477.65Z" transform="translate(-61.06 -43.49)" fill="#ff748f"></path><circle cx="879.75" cy="421.07" r="0.55" fill="#575988"></circle><circle cx="875.09" cy="425.43" r="0.55" fill="#575988"></circle><circle cx="870.35" cy="429.35" r="0.55" fill="#575988"></circle><circle cx="872.8" cy="427.6" r="0.55" fill="#575988"></circle><circle cx="877.52" cy="423.11" r="0.55" fill="#575988"></circle><path d="M954.45,477.65c-.6,1.78-5.06,1.78-5.06,1.78s-8,2.29-11.56,4.07-6,.84-6,.84c-8.19,1.89-18.7-1.38-21.87-2s-4.42-4.76-.5-5.55a7.84,7.84,0,0,0,1.47-.45,38,38,0,0,0,10.73,2c8.08.34,14.48,0,14.48,0l8.18-2.63a13.69,13.69,0,0,1,5.06-1.84,13,13,0,0,0,5-2.18A15.65,15.65,0,0,1,954.45,477.65Z" transform="translate(-61.06 -43.49)" fill="#dce6f2"></path><path d="M934.09,482.78a6.75,6.75,0,0,1-1.36-.14l.12-.58a8.59,8.59,0,0,0,4.9-.68c.73-.29,1.46-.63,2.17-1s1.7-.8,2.58-1.13l.81-.28c.45-.15.9-.3,1.33-.49.25-.1.49-.22.73-.33a8.14,8.14,0,0,1,1.84-.7,8.55,8.55,0,0,1,1-.13,8.51,8.51,0,0,0,.9-.11,7.82,7.82,0,0,0,1.72-.64,8.35,8.35,0,0,1,1.85-.68l.44-.08a2.11,2.11,0,0,0,1.28-.47l.43.41a2.67,2.67,0,0,1-1.62.65l-.41.07a7.82,7.82,0,0,0-1.72.64,8.35,8.35,0,0,1-1.85.68,6.59,6.59,0,0,1-1,.12,8.73,8.73,0,0,0-.93.12,7.56,7.56,0,0,0-1.7.66l-.75.34c-.46.19-.92.35-1.38.5l-.79.28c-.86.32-1.71.72-2.54,1.1s-1.45.69-2.2,1A10.58,10.58,0,0,1,934.09,482.78Z" transform="translate(-61.06 -43.49)" fill="#575988" opacity="0.5"></path><path d="M936,384.23s4.12-6,11.16-5.9,10.06-.79,10.06-.79-4.51,2.67-7.63,3S936,384.23,936,384.23Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M938.38,385.62s3.72-2.58,5.85-2.68,4-.3,4-.3a11.3,11.3,0,0,1-3.27,1.59C943.14,384.73,938.38,385.62,938.38,385.62Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M939.17,387.4s5.61.45,5.66,1.94" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M887,303.78c.29.05,5.29-5.21,5.64-7.29a5.1,5.1,0,0,1,2.18-3.2s3.23,1.29.35,5.24S887,303.78,887,303.78Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M963.82,133.67c-1.14,2.7-2.15,2.9-1.93,5.52a19.88,19.88,0,0,1-4.54,3.57c-3.55,2.11-7.41,6.23-11.83,6.23a23.45,23.45,0,0,1-8.64-1.63c-.7-5.6-2.81-8-2.81-8S969,121.44,963.82,133.67Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M969.17,124.15a23.65,23.65,0,1,1-23.65-23.65A23.64,23.64,0,0,1,969.17,124.15Z" transform="translate(-61.06 -43.49)" fill="#cc818c"></path><path d="M970.66,159l-7.58,11.31s-35.86,17.1-29-3c3-8.85,3.37-15.33,2.83-19.81l.06,0a18.76,18.76,0,0,1,.71,4.56c.11,3.08.19,7,7.85,8.28,12.77,2.15,19.63-5.84,20.83-7.41A37,37,0,0,0,970.66,159Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M819.74,111,815,120.21a18.35,18.35,0,0,1-4.42-.92l-.41-.49c1.94.74,8.48-11.61,8.48-11.61l.21.17C819.4,109.51,819.74,111,819.74,111Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M963.23,283.83c-15.31,6.65-68.29,1-68.29,1a6.68,6.68,0,0,0,.27-1.73c1.44-2.2,2.51-3.52,2.51-3.52l63.47-2.49S962.22,279.9,963.23,283.83Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M937,148.05l-7.06,3a5.64,5.64,0,0,1-5.06-3.28c-1.63-3.42-7.43,0-7.43,0s-17.71-1.34-24.25,1.94c0,0-10.56-4.47-12-4.76s-3.72-1.49-4.76-1.19-2.38-1.94-3.12-1.79-1.05-1.49-3.43-2.08-3.27.15-5.95-2.53-24.39-13.24-24.39-13.24l-9.82-8-10.41-8.33s-6.55,12.34-8.48,11.6l19.78,23.8s14.28,12.5,24.1,16.51,9.07,5.21,9.07,5.21,29.76,15.17,34.37,14.88,3.72,31.09,1.78,36.15-5.05,41.65-5.05,41.65-3,7.73.14,13.09c0,0,.75,11,0,12.94,0,0,53.31,5.7,68.43-1,0,0,2.23-24.69,0-27.82s2.09-10.11,2.09-10.11L975,223.37,998.18,200s3.57-19.49-12.34-32l-10.57-9.37s-5.91-5.11-7.63-5.43-1.09,0-1.09,0-6.9,10-21,7.66c-7.66-1.29-7.74-5.19-7.85-8.28A18.76,18.76,0,0,0,937,148.05Z" transform="translate(-61.06 -43.49)" fill="#67647e"></path><path d="M966.05,228.13s-32.73,1.34-39.27,11.61c0,0,8.48-4,16.06-2.83S966.05,228.13,966.05,228.13Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M929.9,264s15.47,1,18.75-2.23,3.28-5.2,3.28-5.2Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M969.17,196.6s-13.09,15.47,2.83,22.16Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M891.67,166.7s4.76,9.71,7.14,10.36Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M875.61,162.53s11.9,10.71,14.13,11.75C889.74,174.28,877.39,162.53,875.61,162.53Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M923.06,152.27s-11.46,17.1-4,27.52C919,179.79,914.88,167.44,923.06,152.27Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M951.93,281.84l-3.5,3.29-.49.46-4.05,3.83c-.3.22-.58.44-.87.64-16.5,11.83-19.81-6.14-19.81-6.14s-7.29,4.76-8.33.89,17-9.37,19.63-9.07a3.48,3.48,0,0,0,.72,0,11.31,11.31,0,0,0,3.7-1.31c.27-.14.54-.28.8-.43a29.63,29.63,0,0,0,2.67-1.68Z" transform="translate(-61.06 -43.49)" fill="#cc818c"></path><path d="M969.77,124.15a23.65,23.65,0,0,1-11.56,20.33,13.8,13.8,0,0,1-.86-1.72c-.85-2-1.37-4.09-2.22-6.07a18.94,18.94,0,0,0-4-5.79,2.53,2.53,0,0,0-1-.73,2.87,2.87,0,0,0-2.17.6,9.82,9.82,0,0,1-3.3,1.45,3.51,3.51,0,0,1-3.31-1c-.92-1.1-.79-2.72-.52-4.13.57-3.08,1.54-6.1,1.54-9.23s-1.18-6.51-3.9-8.06c-2.4-1.36-5.38-1-8.05-1.75a8.66,8.66,0,0,1-1.21-.42,23.66,23.66,0,0,1,40.59,16.52Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M927.58,103.87c-.43.23-.9.64-.77,1.12a1.1,1.1,0,0,0,.43.55,10.24,10.24,0,0,0,3.74,1.92c2.67.72,5.66.38,8.06,1.75,2.71,1.55,3.91,4.92,3.9,8.05s-1,6.16-1.55,9.23c-.26,1.42-.4,3,.53,4.14a3.53,3.53,0,0,0,3.31,1,9.75,9.75,0,0,0,3.29-1.44,2.85,2.85,0,0,1,2.17-.6,2.64,2.64,0,0,1,1.06.72,18.78,18.78,0,0,1,4,5.8c.86,2,1.38,4.08,2.22,6.07a9.79,9.79,0,0,0,4,4.94,5,5,0,0,0,6-.63c1.38-1.52,1.34-3.82,2-5.77,1.18-3.37,4.48-5.49,6.54-8.4,2.32-3.27,3-7.4,3.59-11.36a9.54,9.54,0,0,0,.06-3.8,13.76,13.76,0,0,0-1.05-2.4c-2.3-4.76-2.25-10.75-5.92-14.56-2.76-2.85-6.94-3.72-10.88-4.2s-8.07-.78-11.45-2.85a12.6,12.6,0,0,0-3.1-1.72,2.55,2.55,0,0,0-3.05,1.14,2,2,0,0,1-.41.83,1.3,1.3,0,0,1-1.16.07l-5.24-1.41.6,2.64a13.08,13.08,0,0,1-5.56-1c-.1,1.49,1.58,2.46,2.1,3.85a3.56,3.56,0,0,1-1,3.63C932.1,103.07,929.72,102.7,927.58,103.87Z" transform="translate(-61.06 -43.49)" fill="#585268"></path><path d="M906.35,459.3l-.21,2.38-.09.05c-8.53,4.76-26.18-8.52-26.18-8.52l1.84-1.84a3.2,3.2,0,0,1,.8,2.48l3.61.2,4.31,4.66s11.67,1.35,14.83.59Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M904.86,472.25c-5.55,1.23-25,1.14-25,1.14L869,475.12s-18.69,1.79-20.77-4,1.63-5.45,1.63-5.45H850l7.78-.63s9.87-3.82,13.49-6.45a77.82,77.82,0,0,0,8.08-7.24s3.25-.63,3.19,3.13l3.61.2,4.31,4.65s11.67,1.36,14.83.6h1.09l-.5,5.75.14.18C906.71,466.75,909.82,471.14,904.86,472.25Z" transform="translate(-61.06 -43.49)" fill="#ff748f"></path><circle cx="823.66" cy="414.31" r="0.55" fill="#575988"></circle><circle cx="809.68" cy="420.38" r="0.55" fill="#575988"></circle><circle cx="802.48" cy="422.57" r="0.55" fill="#575988"></circle><circle cx="813.35" cy="419.22" r="0.55" fill="#575988"></circle><circle cx="806.07" cy="421.48" r="0.55" fill="#575988"></circle><circle cx="817.06" cy="417.5" r="0.55" fill="#575988"></circle><circle cx="820.73" cy="415.91" r="0.55" fill="#575988"></circle><path d="M904.86,472.25c-5.55,1.23-25,1.14-25,1.14L869,475.12s-18.69,1.79-20.77-4,1.63-5.45,1.63-5.45H850c1.19,1.54,3.58,3.3,8.28,3.38l13.44.55,13.93-1s13-.4,15.17-.84a31.52,31.52,0,0,0,5.2-1.91C906.71,466.75,909.82,471.14,904.86,472.25Z" transform="translate(-61.06 -43.49)" fill="#dce6f2"></path><path d="M870,473.81a8.77,8.77,0,0,1-2.2-.27L868,473a10.79,10.79,0,0,0,5.54-.25c.66-.17,1.31-.36,2-.56a22.68,22.68,0,0,1,9.65-1.09l.43,0a91.35,91.35,0,0,0,17.85-.8,6.64,6.64,0,0,0,3.82-1.53l.43.42a7.24,7.24,0,0,1-4.15,1.7,92.71,92.71,0,0,1-18,.8h-.42a29.2,29.2,0,0,0-5.91.17,30.71,30.71,0,0,0-3.55.89c-.66.2-1.32.4-2,.57A14.87,14.87,0,0,1,870,473.81Z" transform="translate(-61.06 -43.49)" fill="#575988" opacity="0.5"></path><path d="M951.93,281.84l-3.5,3.29L939.73,274a29.63,29.63,0,0,0,2.67-1.68Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M991.34,190.5l6.84,9.52v10s3.13,10.57,0,21.13l.35,9.22s-3.32,8.48-2.13,10.56c0,0-.6,6.25-8.63,10.57S970.66,276,970.66,276s-3.42,6.55-12.64,5.06l-8.78,3.72-10.11-12.94,13.68-7.44s4.76-6.4,7.59-6.1L972,244.79s.3-4.31,3.27-4.31c0,0-5.5-4.46-3.57-7.14s.3-14.58.3-14.58Z" transform="translate(-61.06 -43.49)" fill="#67647e"></path><path d="M978.55,233.93s15.62-.29,17.55,3.72S983.31,231.7,978.55,233.93Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M948,284.81a4.1,4.1,0,0,1-.06.78,5.26,5.26,0,0,1-4.92,4.47h-.28a5.25,5.25,0,0,1-5.25-5.25,5.38,5.38,0,0,1,.29-1.71c-2.48-2-2.61-5.58-2.55-7.37a11.31,11.31,0,0,0,3.7-1.31,24.6,24.6,0,0,0,2.59,5.29,5,5,0,0,1,1.22-.15A5.25,5.25,0,0,1,948,284.81Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M939.4,273.26s-3.52.79-3.52,1.43-.79,6.45,3.07,8.83,3.48-3.32,3.48-3.32S939.1,275.09,939.4,273.26Z" transform="translate(-61.06 -43.49)" fill="#575988"></path><circle cx="882.28" cy="241.32" r="5.26" fill="#e4aab4"></circle><circle cx="882.28" cy="241.32" r="4.51" fill="#dce6f2"></circle><path d="M922.86,286.84s11.11,9.22,25.39,3.38v4.46s-9.52,6.54-18.15,2.58S922.86,286.84,922.86,286.84Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M922.86,285.65S934,294.87,948.25,289v4.46s-9.52,6.54-18.15,2.58S922.86,285.65,922.86,285.65Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M922.86,285.65S934,294.87,948.25,289v4.46s-9.52,6.54-18.15,2.58S922.86,285.65,922.86,285.65Z" transform="translate(-61.06 -43.49)" fill="#444053"></path><path d="M923.16,285.65s11.11,9.22,25.39,3.38v4.46S939,300,930.4,296.07,923.16,285.65,923.16,285.65Z" transform="translate(-61.06 -43.49)" opacity="0.05"></path><path d="M888,451.32s14.88,2.73,17.06,3.32-.6,1.64-.6,1.64S890.83,453.85,888,451.32Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M887.61,443.44c.24,0,10.11-2.78,12.24-7.54" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M902,386.51s4,5.26,6.58,5.11S904.35,386.31,902,386.51Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M904.22,395.24s1.68,3.72,4.16,2.53" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M913.59,313.57l10.55,27.82s1.49-17.9-1.66-23.26A9.29,9.29,0,0,0,913.59,313.57Z" transform="translate(-61.06 -43.49)" opacity="0.05"></path><g opacity="0.1"><path d="M939.56,93.13l-.09-.4-1.7-.45.19.83A12.18,12.18,0,0,0,939.56,93.13Z" transform="translate(-61.06 -43.49)"></path><path d="M934.9,99.82l.18-.16a3.55,3.55,0,0,0,1-3.62,4.91,4.91,0,0,0-.84-1.35,13,13,0,0,1-2.45-.72c-.1,1.49,1.58,2.45,2.1,3.85A3,3,0,0,1,934.9,99.82Z" transform="translate(-61.06 -43.49)"></path><path d="M963,145.55a9.83,9.83,0,0,1-4-4.94c-.85-2-1.36-4.1-2.22-6.07a18.65,18.65,0,0,0-4-5.79,2.53,2.53,0,0,0-1.05-.73,2.84,2.84,0,0,0-2.17.6,10,10,0,0,1-3.3,1.45,3.57,3.57,0,0,1-3.31-1c-.92-1.1-.79-2.72-.52-4.13.58-3.08,1.54-6.11,1.55-9.24s-1.19-6.5-3.91-8c-2.4-1.37-5.38-1-8-1.75a10.16,10.16,0,0,1-3.74-1.92l-.21-.19a6.39,6.39,0,0,0-.65.31c-.43.23-.89.64-.77,1.11a1.19,1.19,0,0,0,.44.56,10.3,10.3,0,0,0,3.74,1.91c2.67.73,5.65.39,8.05,1.76,2.72,1.54,3.91,4.92,3.91,8s-1,6.16-1.55,9.23c-.27,1.41-.4,3,.52,4.13a3.52,3.52,0,0,0,3.31,1,10,10,0,0,0,3.3-1.44,2.89,2.89,0,0,1,2.17-.61,2.63,2.63,0,0,1,1,.73,18.88,18.88,0,0,1,4,5.79c.86,2,1.37,4.09,2.22,6.07a9.81,9.81,0,0,0,4,5c1.89,1,4.51,1,6-.63a4.72,4.72,0,0,0,.89-1.49A5.1,5.1,0,0,1,963,145.55Z" transform="translate(-61.06 -43.49)"></path><path d="M971.54,138c1.49-1.88,3.44-3.48,4.84-5.46a13.93,13.93,0,0,0,.77-1.22C975.35,133.61,972.88,135.46,971.54,138Z" transform="translate(-61.06 -43.49)"></path></g><g opacity="0.1"><path d="M883.29,109.9H646.69a12.4,12.4,0,0,0-12.37,12.36V271.75a12.4,12.4,0,0,0,12.37,12.36h185.6s4.81,25.53-11,28.27c0,0,35.38,2.54,29.2-28.27h32.79a12.39,12.39,0,0,0,12.36-12.36V122.26A12.39,12.39,0,0,0,883.29,109.9Z" transform="translate(-61.06 -43.49)"></path><g opacity="0.2"><rect x="608.09" y="106.09" width="191.66" height="11.68" rx="5.67" ry="5.67"></rect><rect x="608.09" y="158.29" width="158.15" height="11.68" rx="5.67" ry="5.67"></rect><rect x="608.09" y="132.19" width="113.85" height="11.68" rx="5.67" ry="5.67"></rect></g></g><path d="M886.38,107.83H649.78a12.41,12.41,0,0,0-12.37,12.37V269.69a12.4,12.4,0,0,0,12.37,12.36h185.6s4.81,25.53-11,28.27c0,0,35.38,2.54,29.2-28.27h32.79a12.39,12.39,0,0,0,12.36-12.36V120.2A12.4,12.4,0,0,0,886.38,107.83Z" transform="translate(-61.06 -43.49)" fill="#fff"></path><g opacity="0.2"><rect x="611.18" y="104.02" width="191.66" height="11.68" rx="5.67" ry="5.67" fill="#510fa8"></rect><rect x="611.18" y="156.23" width="158.15" height="11.68" rx="5.67" ry="5.67" fill="#510fa8"></rect><rect x="611.18" y="130.13" width="113.85" height="11.68" rx="5.67" ry="5.67" fill="#510fa8"></rect></g><path d="M142.19,596.48s3.56,4.66-1.65,11.7-9.51,13-7.77,17.37c0,0,7.86-13.07,14.26-13.25S149.23,604.34,142.19,596.48Z" transform="translate(-61.06 -43.49)" fill="#510fa8"></path><path d="M142.19,596.48a5.88,5.88,0,0,1,.72,1.46c6.25,7.34,9.57,14.18,3.57,14.36-5.59.16-12.29,10.15-13.9,12.68,0,.19.12.38.19.57,0,0,7.86-13.07,14.26-13.25S149.23,604.34,142.19,596.48Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M148.81,602.42c0,1.64-.18,3-.41,3s-.41-1.33-.41-3,.23-.87.46-.87S148.81,600.78,148.81,602.42Z" transform="translate(-61.06 -43.49)" fill="#ffd037"></path><path d="M151.09,604.38c-1.44.79-2.7,1.26-2.81,1.06s1-1,2.41-1.78.88-.21,1,0S152.53,603.6,151.09,604.38Z" transform="translate(-61.06 -43.49)" fill="#ffd037"></path><path d="M123.35,596.48s-3.56,4.66,1.65,11.7,9.51,13,7.77,17.37c0,0-7.86-13.07-14.26-13.25S116.31,604.34,123.35,596.48Z" transform="translate(-61.06 -43.49)" fill="#510fa8"></path><path d="M123.35,596.48a5.88,5.88,0,0,0-.72,1.46c-6.25,7.34-9.57,14.18-3.57,14.36,5.59.16,12.29,10.15,13.9,12.68-.05.19-.12.38-.19.57,0,0-7.86-13.07-14.26-13.25S116.31,604.34,123.35,596.48Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M116.73,602.42c0,1.64.18,3,.41,3s.41-1.33.41-3-.23-.87-.46-.87S116.73,600.78,116.73,602.42Z" transform="translate(-61.06 -43.49)" fill="#ffd037"></path><path d="M114.45,604.38c1.44.79,2.7,1.26,2.81,1.06s-1-1-2.41-1.78-.88-.21-1,0S113,603.6,114.45,604.38Z" transform="translate(-61.06 -43.49)" fill="#ffd037"></path><ellipse cx="71.71" cy="612.01" rx="37.28" ry="5.72" fill="#510fa8" opacity="0.1"></ellipse><path d="M152,619.27l-.18,1.45-.25,2.06-.11.86-.25,2.05-.1.86-.25,2.06L148,652c-.25,2.09-3.66,3.72-7.78,3.72H125.36c-4.12,0-7.52-1.63-7.78-3.72l-2.86-23.38-.25-2.06-.1-.86-.25-2.05-.11-.86-.25-2.06-.18-1.45c-.14-1.18,1.71-2.18,4-2.18h30.31C150.25,617.09,152.1,618.09,152,619.27Z" transform="translate(-61.06 -43.49)" fill="#65617d"></path><polygon points="90.71 577.23 90.46 579.29 52.95 579.29 52.7 577.23 90.71 577.23" fill="#9d9cb5"></polygon><polygon points="90.36 580.15 90.11 582.2 53.31 582.2 53.05 580.15 90.36 580.15" fill="#9d9cb5"></polygon><polygon points="90 583.06 89.75 585.12 53.66 585.12 53.41 583.06 90 583.06" fill="#9d9cb5"></polygon><ellipse cx="645.79" cy="789.35" rx="84.04" ry="13.79" fill="#510fa8" opacity="0.1"></ellipse><g opacity="0.1"><path d="M804.19,409.36H547.8a13.44,13.44,0,0,0-13.4,13.4v162a13.44,13.44,0,0,0,13.4,13.4H748.93s5.21,27.66-11.91,30.63c0,0,38.33,2.75,31.63-30.63h35.54a13.44,13.44,0,0,0,13.4-13.4v-162A13.44,13.44,0,0,0,804.19,409.36Z" transform="translate(-61.06 -43.49)"></path><g opacity="0.2"><rect x="511.08" y="465.45" width="207.7" height="12.66" rx="5.67" ry="5.67"></rect><rect x="511.08" y="437.16" width="90.06" height="12.66" rx="5.67" ry="5.67"></rect></g></g><path d="M802,407.13H545.56a13.44,13.44,0,0,0-13.4,13.4v162a13.44,13.44,0,0,0,13.4,13.4H746.69s5.21,27.66-11.91,30.64c0,0,38.34,2.75,31.64-30.64H802a13.44,13.44,0,0,0,13.4-13.4v-162A13.44,13.44,0,0,0,802,407.13Z" transform="translate(-61.06 -43.49)" fill="#fff"></path><g opacity="0.2"><rect x="508.85" y="463.22" width="207.7" height="12.66" rx="5.67" ry="5.67" fill="#510fa8"></rect><rect x="508.85" y="434.93" width="90.06" height="12.66" rx="5.67" ry="5.67" fill="#510fa8"></rect></g><path d="M755.21,823.46c-1.21-5.13-2-9.64-2-9.64s.28-5.59-2.23-9.79v-1.4h0V792.3a34.65,34.65,0,0,1,2.61-5.41c1.86-3.25,0-15.15,0-15.15s-6.9-16.78-5.22-27.42-14.17-47.27-14.17-47.27a46.49,46.49,0,0,1,1.49-10.46,8.09,8.09,0,0,0,.2-2.19,2.35,2.35,0,0,0,0-.27s0,.06,0,.09c-.24-7-5.79-20.18-5.79-20.18l.75-25.07s3.54-14.79-2.24-34.64c-2-6.92-3.31-12.47-4.13-16.74-.09-.49-.18-1-.26-1.4,11.9-1.81,21-3.32,21-3.32S738.34,554,733.68,549,725.3,528,725.3,528s-2.43-20.39,1.49-26.34,4.47-16.23,4.47-16.23,9-6.5,10.07-9.38,3-9.38,3-12.81-1.12-6.5-.75-8.3-2.61-8.66-1.12-11.91a8.75,8.75,0,0,0,.6-3.13s0-.06,0-.09v0a44.22,44.22,0,0,0-.79-8.46,24,24,0,0,0-8.85-4.73l-.2-.78-.5-2c-.3-.2-.59-.37-.88-.53l0-.74-.09-2.93,1.41-6.58c2.75-11.46-12.54-13.17-12.54-13.17a8,8,0,0,0-4.33-3.79c-3.08-1.08-.51,17.23.93,18.4,1.08.88,4.42,6.62,6,9.44h0l.26.47a5.61,5.61,0,0,0-.7.73l.58,4,.09.61a16.66,16.66,0,0,0-2.44,4.16s2.8,3.07,2.24,6.5.85,7.7.92,7.93c-.16-.19-2.13-2.32-4.09-1.8s-7.46,2.17-7.46,2.17-4.1.72-3.72,1.62-2.8,4.87-2.8,4.87l-11-10.44c-.1-.31-.22-.62-.32-.95a26.19,26.19,0,0,1-1-4.57,26.15,26.15,0,0,0,3.52-1.12,7.62,7.62,0,0,0,3-1.95c1.11-1.32,1.32-3.11,1.77-4.75.88-3.21,2.75-6.07,4.09-9.12a29.6,29.6,0,0,0,2.2-16.37,10.81,10.81,0,0,0-1.69-4.79c-1.8-2.48-5.06-3.48-7.44-5.46s-3.9-5-6.66-6.47c-2.5-1.34-5.55-1.18-8.37-.72a45.09,45.09,0,0,0-15.61,5.68c-1.61.95-3.37,2.05-5.22,1.72-1.58-.29-2.74-1.56-3.77-2.77,0-.05,0-.1.05-.15l-.12-.14A19.37,19.37,0,0,0,657.9,401c0,.44,0,.88.05,1.32l0,.46c0,.13,0,.26,0,.38v0a2,2,0,0,1-.08.59,4.3,4.3,0,0,1-1,1.49,7.84,7.84,0,0,0-.9,1.22,4,4,0,0,1,.15-.45,6.55,6.55,0,0,0-1.14,3.48,3.44,3.44,0,0,0,.82,2.48,12,12,0,0,0,1.8,1.45,21,21,0,0,0,10,21.84c.13.31.26.63.38.95,1.41,3.71,2.47,8,2,12,0,.3-.08.59-.14.88s-.27.3-.39.46h0s-18.19.18-22.48-3.7-10.81,9.47-10.81,9.47-6.52,1.26-7.82,0-8.95-.18-8.95-.18A16.45,16.45,0,0,0,608.07,451a33.64,33.64,0,0,0-8.34-4.64h0l-.2-.07h0a9.38,9.38,0,0,0-4.1-.52s-8.95-7.4-11.56-11.36-15-18.69-15.09-18.76l0-.71-.14-2.15a7.11,7.11,0,0,1-1.11.1c-.07-.21-.15-.46-.25-.74a41.55,41.55,0,0,0-2.64-6.07s0-2.7.79-3.38-.33-10.6-.33-10.6-8.06-18.85-15.28-4.78c0,0-13.65,9.11-2.19,19.71,0,0,4.57,2.21,5.21,4,.43,1.14,2,4.32,3,6.43l.47.95-.13.11.17,1.77.07.68c-2.16,1.23-3.62,2.44-3.27,3.36a20.34,20.34,0,0,1,1.31,4.87S570.24,449,572.29,457.5c0,0,42.49,25.25,56.47,27.05l-2.42,12.63a101,101,0,0,0-.56,10.28c.18,2.71-1.68,15-1.68,15s-2.42,18-4.47,20.56S618,556.35,618,556.35a91.14,91.14,0,0,1-2.8,15.33c-2,6.86-.56,15.34-.56,15.34s-7.08,16.23,9.88,5.23c0,0,8.33-.52,17.92-.85,0,.32,0,.63,0,1,0,1.23,0,2.57-.06,4-.13,9.3-.18,22.11.24,31.81.75,17.13,6,51.05,6,51.05v17a23.4,23.4,0,0,0-.49,4.87,31.75,31.75,0,0,0,4.59,17.06l1.31,11.36s3.06,7.49,3.12,12a6.93,6.93,0,0,1-.13,1.09,7.76,7.76,0,0,0-.15,1.74c-.17,5.16,2.94,17.5,2.94,17.5s.18,12.45,2,13.17c1.59.62-2.13,7.18-3.24,9.06,0-.12,0-.24-.07-.36l-.23.38a8.72,8.72,0,0,0-.58,3.14,4.53,4.53,0,0,0,2.07,4.38c3.54,2.16,5.44,4,2.43,4.69a32.28,32.28,0,0,0-3.28.69l-.16-.42a2,2,0,0,0-1.22,2.18,9.08,9.08,0,0,0,1.11,4.22c3,6.68,5,9.2,5,9.2l1.44-.16a7.71,7.71,0,0,1-.83,1.54,5.94,5.94,0,0,1-2.11,1.87,6.36,6.36,0,0,1-2.55.87,7.21,7.21,0,0,0-5.28,2.57c-1.86,2.41-3,5.68.65,8.56l13.33,4.6s22.92,3,21.71-2.17-2-9.65-2-9.65a20.32,20.32,0,0,0-1.86-9.12,12.23,12.23,0,0,0-.81-1.34l.81-.09s1.68-11.37,3.91-13.53c.52-.5.64-.88.51-1.18.23-.62-.35-1-1.1-1.19l-.16.45a10.91,10.91,0,0,0-2.23-.25s-.74-5.95,1.68-8.11a2.3,2.3,0,0,0,.47-1.77,9.94,9.94,0,0,0-.25-2.43l-.09.14c-1.22-5.4-5.35-14-5.35-14s-.19-5.41,1.31-7.58-.19-29.4-.19-29.4.56-13.17-1.12-19.3,2.05-13.35,2.05-13.35,0-.15,0-.4l.05-.09s-.09-.81-.22-2.07c0,0,0,.08,0,.12-.38-3.48-1.09-9.8-1.61-12.72-.75-4.15.18-24,.18-24l3.36-8.48,6,14.62,6.34,19.48s3.14,4.11,3.21,8.28a4.08,4.08,0,0,1,0,.61,11.75,11.75,0,0,0-.07,1.31,11.54,11.54,0,0,0,1.93,6.93s1.68,9.2,4.29,11.55,2.61,6.85,2.61,6.85,3.16,13.35,4.66,15.7c1.25,2,1.32,7.41,1.31,9.07h0c0,.31,0,.49,0,.49s.44,4.77.42,8.78c0,.49,0,1,0,1.43a.43.43,0,0,1,0-.11,14.65,14.65,0,0,1-.39,3.25s0,.12-.06.19l.06-.68a34.37,34.37,0,0,0-1,8.32c-.09,4.8.64,10.48,3.55,13.81,5,5.78,8.2,5.06,8.2,5.06s-2.42,7.21-5.41,8.65a1.69,1.69,0,0,0-.31.21c0-.14-.06-.28-.08-.42a3.5,3.5,0,0,0-.87,2.69c-.22,3.17,1.78,8.32,3.69,10.69a5.82,5.82,0,0,0,2.52,1.47l-.47.29a10.25,10.25,0,0,1-1,.49,4.83,4.83,0,0,1-1.52.39,7.14,7.14,0,0,0-5.28,2.57c-1.86,2.4-3,5.67.65,8.55l13.33,4.6S756.42,828.61,755.21,823.46Z" transform="translate(-61.06 -43.49)" fill="url(#6e777f18-a157-4954-9b1f-a7cbf36b1989-2)"></path><path d="M667.65,832l-12.9-4.6c-3.56-2.88-2.42-6.15-.63-8.56a6.9,6.9,0,0,1,5.11-2.57,6,6,0,0,0,2.47-.87,5.79,5.79,0,0,0,2-1.87,9.43,9.43,0,0,0,1.47-5s14.17-4.15,18,0a10.66,10.66,0,0,1,1.72,2.51,21,21,0,0,1,1.8,9.12s.73,4.51,1.89,9.65S667.65,832,667.65,832Z" transform="translate(-61.06 -43.49)" fill="#2d293d"></path><path d="M730.79,825.63l-12.9-4.6c-3.56-2.88-2.43-6.15-.63-8.55a6.83,6.83,0,0,1,5.11-2.57,4.53,4.53,0,0,0,1.47-.39,7.58,7.58,0,0,0,1-.49c3.6-2,3.51-6.85,3.51-6.85s14.16-4.15,18,0a9.67,9.67,0,0,1,1.35,1.84c2.44,4.2,2.17,9.8,2.17,9.8s.72,4.51,1.89,9.65S730.79,825.63,730.79,825.63Z" transform="translate(-61.06 -43.49)" fill="#2d293d"></path><path d="M683.25,808.54a10.66,10.66,0,0,1,1.72,2.51h0l-21.23,2.46a9.43,9.43,0,0,0,1.47-5S679.38,804.39,683.25,808.54Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M747.74,804v4c-3.29,5.44-19.26,4.25-23.9,1.52a7.58,7.58,0,0,0,1-.49c3.6-2,3.51-6.85,3.51-6.85s14.16-4.15,18,0A9.67,9.67,0,0,1,747.74,804Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M750.27,786.89a36.78,36.78,0,0,0-2.53,5.41v14.25c-3.6,6-22.36,4-24.89.72s-5.23-11.72-2.34-13.16,5.23-8.66,5.23-8.66-3.07.72-7.94-5.05-3.43-18.58-2.52-21.65,0-13.35,0-13.35.18-7.21-1.27-9.56-4.51-15.69-4.51-15.69,0-4.51-2.52-6.86-4.15-11.54-4.15-11.54A11.85,11.85,0,0,1,701,694c.55-4.51-3.06-9.38-3.06-9.38l-6.13-19.48-5.78-14.61L682.81,659s-.91,19.84-.18,24,1.8,15.15,1.8,15.15-3.61,7.22-2,13.35,1.08,19.3,1.08,19.3,1.62,27.24.18,29.4-1.26,7.58-1.26,7.58,7.39,15.87,5,18-1.63,8.12-1.63,8.12,5,0,2.89,2.16S685,809.62,685,809.62l-21.81,2.52s-2-2.52-4.89-9.2.54-6,3.45-6.67,1.06-2.53-2.36-4.69-1.45-7-1.45-7,5.23-8.84,3.43-9.57-2-13.16-2-13.16-3.61-14.8-2.71-18.76-2.89-13.53-2.89-13.53l-1.26-11.37a31.27,31.27,0,0,1-4-21.46V679.2s-5-33.91-5.77-51.05c-.46-11-.33-25.95-.18-35.3.09-5.24.18-8.71.18-8.71L720.69,576a64.36,64.36,0,0,0,1.41,11.57c.79,4.28,2,9.82,4,16.75,5.59,19.84,2.16,34.63,2.16,34.63l-.72,25.08s6.86,16.77,5.41,22.55a48,48,0,0,0-1.44,10.46s15.33,36.62,13.71,47.26,5,27.42,5,27.42S752.07,783.64,750.27,786.89Z" transform="translate(-61.06 -43.49)" fill="#575988"></path><path d="M705.71,692.91l23.73-3.16S716,703.46,705.71,692.91Z" transform="translate(-61.06 -43.49)" opacity="0.05"></path><path d="M726,666.57s.81,8.39-4.33,11.55C721.68,678.12,730.88,676.67,726,666.57Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M724.55,639.88s-19.83,16.32-27,15S724.55,639.88,724.55,639.88Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M676.31,700.58s-15.06,3.42-15.51,9.47S676.31,700.58,676.31,700.58Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M679.62,775.8s-21.28,4-15.24,6.67,16,4.87,16,4.87S687.2,787.7,679.62,775.8Z" transform="translate(-61.06 -43.49)" opacity="0.05"></path><g opacity="0.05"><path d="M660.08,786.77a4.24,4.24,0,0,1-1.94-3.09l-.22.38s-2,4.87,1.44,7c.4.25.77.5,1.11.74.64-.12,1.32-.21,2-.37C665.35,790.73,663.51,788.93,660.08,786.77Z" transform="translate(-61.06 -43.49)"></path><path d="M687.5,785.32c.59-.54.57-1.93.21-3.71a10.06,10.06,0,0,0-1.21,5.23A4.38,4.38,0,0,1,687.5,785.32Z" transform="translate(-61.06 -43.49)"></path><path d="M684.23,695.58a24.26,24.26,0,0,0-1.44,6.63,26.12,26.12,0,0,1,1.65-4.56S684.36,696.84,684.23,695.58Z" transform="translate(-61.06 -43.49)"></path><path d="M733,686.11a8.3,8.3,0,0,0,.2-2c-.27,1.34-.46,2.59-.59,3.69C732.68,687.27,732.81,686.7,733,686.11Z" transform="translate(-61.06 -43.49)"></path><path d="M683.71,759.71a11.5,11.5,0,0,0,.54-4,13.59,13.59,0,0,0-1,5.06A4.88,4.88,0,0,1,683.71,759.71Z" transform="translate(-61.06 -43.49)"></path><path d="M688.18,793.72a71,71,0,0,0-2.48,11.08l-21.81,2.53s-2-2.53-4.89-9.2c-.25-.59-.45-1.11-.61-1.59-1.31.6-1.82,2-.11,5.92,2.89,6.67,4.88,9.2,4.88,9.2L685,809.13s1.62-11.36,3.78-13.53C689.83,794.54,689.15,794,688.18,793.72Z" transform="translate(-61.06 -43.49)"></path><path d="M659.36,761.33s.18,12.45,2,13.17h0c.91-2.06,1.52-4,.71-4.34-1.81-.72-2-13.17-2-13.17s-3.6-14.79-2.7-18.76-2.89-13.53-2.89-13.53l-1.26-11.36a31.23,31.23,0,0,1-4-21.47v-17.5s-5-33.91-5.77-51c-.46-11-.33-26-.18-35.3,0-1.69.05-3.19.08-4.45l-.62.06s-.1,3.47-.18,8.72c-.16,9.34-.29,24.32.18,35.29.72,17.14,5.77,51.05,5.77,51.05v17.5a31.23,31.23,0,0,0,4,21.47L653.77,729s3.79,9.56,2.89,13.53S659.36,761.33,659.36,761.33Z" transform="translate(-61.06 -43.49)"></path><path d="M723.58,802.46a21,21,0,0,1-3.45-8.57c-2.23,2,.33,9.81,2.73,12.9,2.52,3.24,21.28,5.23,24.89-.72v-3.44C742.87,807.47,726,805.53,723.58,802.46Z" transform="translate(-61.06 -43.49)"></path><path d="M751,782.08a35,35,0,0,0-2.53,5.41V790c.41-.93,1-2.16,1.81-3.62a10.79,10.79,0,0,0,.79-4.46A.61.61,0,0,0,751,782.08Z" transform="translate(-61.06 -43.49)"></path><path d="M724.69,784.92a34.82,34.82,0,0,0,1.78-4.29s-3.07.72-7.94-5c-3.55-4.2-3.75-12.13-3.24-17.31-.91,3.06-2.35,15.87,2.52,21.64C721,783.69,723.4,784.68,724.69,784.92Z" transform="translate(-61.06 -43.49)"></path><path d="M715.28,744.92a96.4,96.4,0,0,1,.36,10.69,15.59,15.59,0,0,1,.37-1.68c.91-3.06,0-13.34,0-13.34s.18-7.22-1.26-9.56-4.51-15.7-4.51-15.7,0-4.51-2.52-6.85-4.15-11.55-4.15-11.55a11.81,11.81,0,0,1-1.81-7.75c.54-4.51-3.06-9.38-3.06-9.38l-6.14-19.49-5.77-14.61-3.25,8.48s0,1.07-.11,2.74l2.64-6.89,5.77,14.61L698,684.13s3.61,4.87,3.07,9.38a11.81,11.81,0,0,0,1.81,7.75s1.62,9.2,4.14,11.55,2.53,6.85,2.53,6.85,3.07,13.35,4.51,15.7S715.28,744.92,715.28,744.92Z" transform="translate(-61.06 -43.49)"></path></g><path d="M730.43,413l-1.36,6.58.08,2.93.06,2.17-7.53.77-.84-1.56h0c-1.56-2.82-4.79-8.56-5.84-9.44-1.39-1.17-3.87-19.48-.89-18.4a7.88,7.88,0,0,1,4.19,3.8S733.09,401.59,730.43,413Z" transform="translate(-61.06 -43.49)" fill="#ffcdd3"></path><path d="M729.21,424.72l-7.53.77-.84-1.56h0a6.65,6.65,0,0,1,8.31-1.37Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M731.11,428.28l-9.93,2.3-.2-1.48-.57-4s3.93-5.24,9.61-1.31l.49,2Z" transform="translate(-61.06 -43.49)" fill="#dce6f2"></path><path d="M570.33,413.76l-10.59,5.68-1-2c-1-2.11-2.51-5.29-2.92-6.43-.63-1.75-5.05-4-5.05-4-11.09-10.6,2.12-19.71,2.12-19.71,7-14.07,14.79,4.78,14.79,4.78s1.08,9.93.32,10.6-.77,3.38-.77,3.38a41.06,41.06,0,0,1,2.56,6.07C570.16,413.14,570.33,413.76,570.33,413.76Z" transform="translate(-61.06 -43.49)" fill="#ffcdd3"></path><path d="M570.33,413.76l-10.59,5.68-1-2c1.49-1.24,6.8-5.54,8.54-5.35a13.32,13.32,0,0,0,2.51.07C570.16,413.14,570.33,413.76,570.33,413.76Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M571.41,417l-11.9,5.87-.24-2.56-.17-1.77s6.9-5.91,8.94-5.69a10.76,10.76,0,0,0,3.11,0l.13,2.14Z" transform="translate(-61.06 -43.49)" fill="#dce6f2"></path><path d="M701.57,456.78s-51.92,5.86-42.21,2.71c6.75-2.2,9.43-6.49,10-11.26.45-4-.57-8.3-1.94-12a51.64,51.64,0,0,0-4.64-9.38s39.69-21.83,31.75-2a31.8,31.8,0,0,0-2.25,9.4,26.28,26.28,0,0,0,1,9.51A28.27,28.27,0,0,0,701.57,456.78Z" transform="translate(-61.06 -43.49)" fill="#ffcdd3"></path><path d="M694.53,424.86a31.8,31.8,0,0,0-2.25,9.4c-3.74,3.14-7.84,2.93-13.1,2.93-4,0-8.52,1-11.76-1a51.64,51.64,0,0,0-4.64-9.38S702.47,405,694.53,424.86Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><circle cx="617.41" cy="373.61" r="21.47" fill="#ffcdd3"></circle><path d="M701.57,456.78s-51.92,5.86-42.21,2.71c6.75-2.2,9.43-6.49,10-11.26,2.58-2.8,7.77-4.82,11.11-5.89a15.51,15.51,0,0,1,9.41-.15,13.07,13.07,0,0,1,3.42,1.58A28.27,28.27,0,0,0,701.57,456.78Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M731.11,428.28l-9.93,2.3-.2-1.48a8.77,8.77,0,0,1,9.53-3.26Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M571.41,417l-11.9,5.87-.24-2.56a87.48,87.48,0,0,1,12-5.32Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M722.1,587.59c-20.1,3.18-48.72,7.31-53.26,5.93-3.76-1.15-15.79-1-26.26-.67.09-5.24.18-8.71.18-8.71L720.69,576A64.36,64.36,0,0,0,722.1,587.59Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M742.15,582.87s-66.2,11.37-73.31,9.2-43.58.18-43.58.18c-16.41,11-9.56-5.23-9.56-5.23s-1.44-8.48.54-15.33A93.37,93.37,0,0,0,619,556.36s-.36-10.83,1.62-13.35,4.33-20.57,4.33-20.57,1.81-12.26,1.63-15a102.58,102.58,0,0,1,.54-10.28l2.34-12.63c-13.53-1.8-54.66-27.06-54.66-27.06-2-8.47-17.31-28.32-17.31-28.32a20.6,20.6,0,0,0-1.27-4.87c-1.08-2.88,15.16-8.65,15.16-8.65s12.08,14.79,14.61,18.76,11.18,11.36,11.18,11.36a8.8,8.8,0,0,1,4,.52l.21.06h0a32.34,32.34,0,0,1,8.08,4.64,15.66,15.66,0,0,1,11,4.15s7.4-1.08,8.66.18,7.58,0,7.58,0,6.31-13.35,10.46-9.47,21.75,3.7,21.75,3.7c2.35-3.12,8.06-5.36,11.63-6.51a15.58,15.58,0,0,1,9.41-.15,12.13,12.13,0,0,1,3.71,1.79l10.68,10.46s3.07-4,2.71-4.87,3.61-1.62,3.61-1.62,5.23-1.63,7.21-2.17,3.8,1.61,4,1.8c-.06-.23-1.42-4.6-.89-7.93s-2.17-6.5-2.17-6.5c6.32-15.51,20.57-2.52,20.57-2.52s1.62,8.48.18,11.72,1.44,10.11,1.08,11.91.72,4.87.72,8.3-1.8,9.92-2.89,12.8-9.74,9.38-9.74,9.38-.54,10.29-4.33,16.24S722.85,528,722.85,528,726.46,543.91,731,549,742.15,582.87,742.15,582.87Z" transform="translate(-61.06 -43.49)" fill="#656691"></path><path d="M645.65,464.18s-2-5.95-3.79-6.49a42.93,42.93,0,0,1-5.23-2.35l1.16-2.22s6.77,1.86,7.86,3.84S645.65,464.18,645.65,464.18Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M609.39,451c-.36,1.8-16.42,3.43-16.42,3.43l8.12-8.14h0l.2.07h0A32.34,32.34,0,0,1,609.39,451Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><circle cx="501.87" cy="382.76" r="1.44" fill="#575988"></circle><circle cx="503.72" cy="385.65" r="1.44" fill="#575988"></circle><circle cx="505.53" cy="388.31" r="1.44" fill="#575988"></circle><circle cx="507.42" cy="391.2" r="1.44" fill="#575988"></circle><circle cx="677.46" cy="391.04" r="1.17" fill="#575988"></circle><circle cx="677.64" cy="393.7" r="1.17" fill="#575988"></circle><circle cx="677.8" cy="396.36" r="1.17" fill="#575988"></circle><path d="M645.74,513.06c-.17-.21,40.49,51.14,72.06,21.47C717.8,534.53,667.92,541.29,645.74,513.06Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M622.38,539.76s24.33.66,26.87,7.66v7.29a4.65,4.65,0,0,1-4.52,0c-2.45-1.33-17.17-8.8-22.35-5.21Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M622.83,539.76s23.27.63,25.7,7.31V554a4.46,4.46,0,0,1-4.33,0c-2.34-1.26-16.41-8.39-21.37-5Z" transform="translate(-61.06 -43.49)" fill="#656691"></path><path d="M635.66,486.92a78.61,78.61,0,0,0,9.43,16.19,63.48,63.48,0,0,0,14.78,14.27S636.06,490.27,635.66,486.92Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M627.7,458.65s4.06,17.52,14.52,23.48Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M621.47,460.42c-.1-.32-3.6,13.86,13.49,21.71C635,482.13,627.7,479.66,621.47,460.42Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M727.72,448.67c-.27,0,8.44,5.54,10.8,8.11C738.52,456.78,732.86,448.31,727.72,448.67Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M672.67,436.56a4.57,4.57,0,0,0,1.68,2.9,4.63,4.63,0,0,0,2,.45c6.55.4,13.36.69,19.41-1.83a7.34,7.34,0,0,0,3-1.95c1.08-1.32,1.28-3.11,1.72-4.75.84-3.21,2.65-6.07,4-9.12a30.59,30.59,0,0,0,2.12-16.37,10.85,10.85,0,0,0-1.63-4.79c-1.74-2.48-4.9-3.48-7.2-5.45s-3.77-5-6.45-6.48c-2.42-1.34-5.37-1.18-8.1-.72A42.74,42.74,0,0,0,668,394.13c-1.55.95-3.26,2.05-5,1.72-1.57-.3-2.71-1.62-3.72-2.85a20,20,0,0,0-1.6,9.35,4.16,4.16,0,0,1,0,1.41,4.35,4.35,0,0,1-1,1.49c-1.62,1.87-2.63,4.84-1,6.73.69.83,1.76,1.28,2.44,2.12,1.21,1.51.8,3.67.77,5.61a2.86,2.86,0,0,0,.48,1.9,2.77,2.77,0,0,0,2.65.63,7.35,7.35,0,0,1,2.82-.27,4.64,4.64,0,0,1,2.45,1.89C670.23,427.7,671.4,431.93,672.67,436.56Z" transform="translate(-61.06 -43.49)" fill="#2d293d"></path><g opacity="0.1"><path d="M699.45,434.47a7.26,7.26,0,0,1-3,2c-6,2.52-12.86,2.23-19.41,1.82a4.36,4.36,0,0,1-2-.45,4.54,4.54,0,0,1-1.68-2.9c-1.27-4.62-2.44-8.85-5.47-12.69a4.64,4.64,0,0,0-2.45-1.89,7.16,7.16,0,0,0-2.82.27A2.79,2.79,0,0,1,660,420a2.88,2.88,0,0,1-.48-1.91c0-1.93.44-4.1-.77-5.6-.68-.85-1.74-1.29-2.44-2.12a4.24,4.24,0,0,1-.42-4.31c-1.14,1.82-1.64,4.16-.3,5.75.69.83,1.76,1.28,2.44,2.12,1.21,1.51.8,3.67.77,5.61a2.86,2.86,0,0,0,.48,1.9,2.77,2.77,0,0,0,2.65.63,7.35,7.35,0,0,1,2.82-.27,4.64,4.64,0,0,1,2.45,1.89c3,3.84,4.2,8.07,5.47,12.7a3.39,3.39,0,0,0,3.7,3.35c6.55.4,13.36.69,19.41-1.83a7.34,7.34,0,0,0,3-1.95,5.73,5.73,0,0,0,.93-1.74A3.06,3.06,0,0,1,699.45,434.47Z" transform="translate(-61.06 -43.49)"></path><path d="M657.68,403.19a3,3,0,0,0,.66-1.08,4.17,4.17,0,0,0,0-1.41,19.9,19.9,0,0,1,1-7.77l-.12-.14a19.86,19.86,0,0,0-1.6,9.35A6.15,6.15,0,0,1,657.68,403.19Z" transform="translate(-61.06 -43.49)"></path></g><path d="M668.84,449.57s26.82,3.55,29.23-.48" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M721,438.47s14.89,0,18.17,5.61" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M1041.74,425s1.86,2.43-.86,6.11-5,6.79-4.06,9.08c0,0,4.11-6.83,7.45-6.93S1045.42,429.06,1041.74,425Z" transform="translate(-61.06 -43.49)" fill="#510fa8"></path><path d="M1041.74,425a3.29,3.29,0,0,1,.38.76c3.26,3.84,5,7.41,1.86,7.5-2.92.09-6.42,5.31-7.26,6.63,0,.1.06.2.1.3s4.11-6.83,7.45-6.93S1045.42,429.06,1041.74,425Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M1045.2,428.05c0,.86-.09,1.56-.21,1.56s-.22-.7-.22-1.56.12-.45.24-.45S1045.2,427.2,1045.2,428.05Z" transform="translate(-61.06 -43.49)" fill="#ffd037"></path><path d="M1046.39,429.08c-.75.41-1.41.66-1.46.55s.5-.52,1.26-.93.45-.11.51,0S1047.15,428.67,1046.39,429.08Z" transform="translate(-61.06 -43.49)" fill="#ffd037"></path><path d="M1031.9,425s-1.87,2.43.86,6.11,5,6.79,4.06,9.08c0,0-4.11-6.83-7.46-6.93S1028.22,429.06,1031.9,425Z" transform="translate(-61.06 -43.49)" fill="#510fa8"></path><path d="M1031.9,425a3.05,3.05,0,0,0-.39.76c-3.26,3.84-5,7.41-1.86,7.5,2.92.09,6.43,5.31,7.27,6.63,0,.1-.06.2-.1.3s-4.11-6.83-7.46-6.93S1028.22,429.06,1031.9,425Z" transform="translate(-61.06 -43.49)" opacity="0.1"></path><path d="M1028.43,428.05c0,.86.1,1.56.22,1.56a3.16,3.16,0,0,0,.21-1.56c0-.85-.12-.45-.24-.45S1028.43,427.2,1028.43,428.05Z" transform="translate(-61.06 -43.49)" fill="#ffd037"></path><path d="M1027.24,429.08c.76.41,1.41.66,1.47.55s-.51-.52-1.26-.93-.46-.11-.52,0S1026.49,428.67,1027.24,429.08Z" transform="translate(-61.06 -43.49)" fill="#ffd037"></path><path d="M1029,439.82s5.21-.16,6.78-1.28,8-2.45,8.41-.66,7.83,8.92,2,9-13.67-.91-15.24-1.87S1029,439.82,1029,439.82Z" transform="translate(-61.06 -43.49)" fill="#a8a8a8"></path><path d="M1046.26,446.23c-5.88,0-13.67-.92-15.23-1.87-1.2-.73-1.67-3.34-1.83-4.54H1029s.33,4.21,1.9,5.16,9.35,1.92,15.24,1.87c1.7,0,2.28-.62,2.25-1.51C1048.17,445.88,1047.53,446.22,1046.26,446.23Z" transform="translate(-61.06 -43.49)" opacity="0.2"></path></svg>
        </figure>
      </div>
      <!-- SVG background -->
      <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
        <figure class="w-100 d-none d-lg-block">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1500 820" class="injected-svg svg-inject" style="height: 1000px;">
          <path class="fill-cyan" d="M 153.37 455.293 L 143.264 444.989 C 142.269 443.976 142.269 442.371 143.264 441.358 L 153.37 431.055 C 154.364 430.042 155.938 430.042 156.932 431.055 L 167.038 441.358 C 168.032 442.371 168.032 443.976 167.038 444.989 L 156.932 455.293 C 156.02 456.306 154.364 456.306 153.37 455.293 Z" style=""></path>
          <circle class="fill-pink" cx="1184.025" cy="85.335" r="9.723" style=""></circle>
          <circle class="fill-yellow" stroke-width="3" stroke-miterlimit="10" cx="320.504" cy="209.51" r="12.587" style=""></circle>
          <path class="fill-blue" d="M 42.564 -16.417 C 43.206 -18.074 44.682 -19.262 46.438 -19.535 L 62.879 -22.089 C 64.634 -22.362 66.401 -21.677 67.515 -20.294 L 77.948 -7.333 C 79.062 -5.949 79.353 -4.076 78.712 -2.419 L 72.703 13.096 C 72.061 14.753 70.585 15.941 68.829 16.215 L 52.388 18.769 C 50.633 19.042 48.865 18.358 47.752 16.973 L 37.319 4.012 C 36.205 2.628 35.914 0.755 36.555 -0.902 L 42.564 -16.417 Z" style=""></path>
          <path class="fill-pink" d="M 1128.161 586.512 C 1128.462 585.735 1129.154 585.178 1129.977 585.05 L 1137.684 583.853 C 1138.506 583.725 1139.335 584.046 1139.857 584.695 L 1144.747 590.77 C 1145.269 591.419 1145.406 592.297 1145.105 593.073 L 1142.289 600.346 C 1141.988 601.123 1141.296 601.68 1140.473 601.808 L 1132.767 603.005 C 1131.944 603.133 1131.115 602.812 1130.593 602.163 L 1125.703 596.088 C 1125.181 595.439 1125.044 594.561 1125.345 593.785 L 1128.161 586.512 Z" style=""></path>
          <path class="fill-purple" d="M 109.272 171.631 C 109.643 170.672 110.497 169.986 111.512 169.828 L 121.017 168.352 C 122.032 168.193 123.054 168.59 123.698 169.389 L 129.729 176.883 C 130.373 177.683 130.542 178.766 130.171 179.723 L 126.697 188.693 C 126.326 189.651 125.473 190.339 124.458 190.497 L 114.952 191.973 C 113.937 192.131 112.916 191.736 112.272 190.935 L 106.24 183.442 C 105.596 182.641 105.428 181.559 105.798 180.601 L 109.272 171.631 Z" style=""></path>
          <path class="fill-purple" d="M 258.215 770.571 C 258.563 769.674 259.363 769.03 260.314 768.882 L 269.221 767.499 C 270.171 767.351 271.129 767.722 271.732 768.471 L 277.384 775.492 C 277.988 776.243 278.146 777.257 277.798 778.155 L 274.543 786.559 C 274.195 787.457 273.395 788.101 272.444 788.249 L 263.538 789.633 C 262.587 789.781 261.629 789.41 261.026 788.66 L 255.374 781.639 C 254.771 780.889 254.613 779.874 254.96 778.976 L 258.215 770.571 Z" style=""></path>
          <circle class="fill-cyan" stroke-width="3" stroke-miterlimit="10" cx="730.584" cy="767.881" r="9.997" style=""></circle>
          <path class="fill-purple" d="M 1390.234 263.204 C 1390.491 262.543 1391.08 262.067 1391.782 261.958 L 1398.352 260.938 C 1399.053 260.829 1399.759 261.103 1400.204 261.655 L 1404.373 266.834 C 1404.818 267.387 1404.934 268.136 1404.678 268.798 L 1402.277 274.997 C 1402.021 275.659 1401.43 276.134 1400.729 276.244 L 1394.16 277.265 C 1393.459 277.373 1392.752 277.1 1392.307 276.547 L 1388.138 271.368 C 1387.693 270.815 1387.577 270.066 1387.833 269.404 L 1390.234 263.204 Z" style=""></path>
        </svg>
        </figure>
      </div>
      <!-- Hero container -->
      <div class="container py-5 pt-lg-6 d-flex align-items-center position-relative zindex-100">
        <div class="col">
          <div class="row">
            <div class="col-lg-5 col-xl-6 text-center text-lg-left">

              <div>
                <h2 class="text-white mb-4">
                  <span class="display-4 font-weight-light">The North Remembers </span>
                  <span class="d-block">Purpose <strong class="font-weight-light">Website UI Kit</strong></span>
                </h2>
                <p class="lead text-white">A unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
                <div class="mt-5">
                  <a href="#sct-page-examples" class="btn btn-white rounded-pill hover-translate-y-n3 btn-icon mr-sm-4 scroll-me">
                    <span class="btn-inner--text">Get Started</span>
                    <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features (v1) -->

    <section id="sct-page-examples" class="slice bg-section-secondary">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
              <div class="px-4 py-5">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="147px" height="109px" viewBox="0 0 147 109" version="1.1" class="injected-svg svg-inject" style="height: 70px;">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Code_2</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Code_2" transform="translate(1.000000, 1.000000)">
            <path d="M144.1,8.5 L144.1,98.1 C144.1,102.2 140.8,105.6 136.6,105.6 L8.1,105.6 C4,105.6 0.6,102.3 0.6,98.1 L0.6,0.6 L136.1,0.6 C140.6,0.6 144.1,4.2 144.1,8.5 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M133.7,0.6 C139.4,0.6 144.1,5.3 144.1,11 L144.1,98.1 C144.1,102.2 140.9,105.6 137,105.6 L14.3,105.6 C10.4,105.6 7.2,102.3 7.2,98.1 L7.2,0.6 L133.7,0.6 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <path d="M95.9,19.5 L0.7,19.5 L0.7,8.1 C0.7,4 4,0.6 8.2,0.6 L136.7,0.6 C140.8,0.6 144.2,3.9 144.2,8.1 L144.2,19.5 L119.2,19.5" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M134.9,19.2 L143,19.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M124.4,19.2 L125.4,19.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M1.3,19.2 L87.5,19.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <circle id="Oval" class="fill-primary-300" fill-rule="nonzero" cx="13.5" cy="10.2" r="3.2"></circle>
            <circle id="Oval" class="fill-primary-200" fill-rule="nonzero" cx="24.1" cy="10.2" r="3.2"></circle>
            <circle id="Oval" class="fill-primary-200" fill-rule="nonzero" cx="34.7" cy="10.2" r="3.2"></circle>
            <path d="M0.7,62.6 L0.7,61.4" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M0.7,55.2 L0.7,8 C0.7,3.9 4,0.5 8.2,0.5 L136.7,0.5 C140.8,0.5 144.2,3.8 144.2,8 L144.2,98.1 C144.2,102.2 140.9,105.6 136.7,105.6 L8.2,105.6 C4.1,105.6 0.7,102.3 0.7,98.1 L0.7,77" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <g id="Group" transform="translate(18.000000, 31.000000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M22.1,20.1 L48.5,20.2" id="Shape" class="stroke-neutral"></path>
                <path d="M80.9,20.1 L111.3,20.3" id="Shape" class="stroke-neutral"></path>
                <path d="M60.5,58.3 L91,58.5" id="Shape" class="stroke-primary"></path>
                <path d="M57.5,20.1 L72.3,20.2" id="Shape" class="stroke-primary"></path>
                <path d="M0.6,19.9 L11.4,20" id="Shape" class="stroke-neutral"></path>
                <path d="M37.8,32.8 L53.7,33" id="Shape" class="stroke-primary"></path>
                <path d="M62.5,32.8 L103,33.3" id="Shape" class="stroke-neutral"></path>
                <path d="M0.6,32.7 L27.2,32.8" id="Shape" class="stroke-neutral"></path>
                <path d="M37.8,45.5 L74.7,45.7" id="Shape" class="stroke-primary"></path>
                <path d="M0.6,45.4 L27.2,45.5" id="Shape" class="stroke-neutral"></path>
                <path d="M29.9,58.3 L50.3,58.4" id="Shape" class="stroke-neutral"></path>
                <path d="M0.6,58.1 L17,58.2" id="Shape" class="stroke-primary"></path>
                <path d="M0.5,0.4 L75.3,0.7" id="Shape" class="stroke-neutral"></path>
            </g>
        </g>
    </g>
</svg>
              </div>
              <div class="px-4 pb-5">
                <h5>Landing Pages</h5>
                <p class="text-muted">Impress with these beautiful landing pages.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
              <div class="px-4 py-5">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="147px" height="110px" viewBox="0 0 147 110" version="1.1" class="injected-svg svg-inject" style="height: 70px;">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Code</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Code" transform="translate(2.000000, 1.000000)">
            <path d="M137.6,97.2 L21.2,97.2 C18.4,97.2 16.1,94.9 16.1,92.1 L16.1,10.2 C16.1,7.4 18.4,5.1 21.2,5.1 L137.6,5.1 C140.4,5.1 142.7,7.4 142.7,10.2 L142.7,92.1 C142.7,94.9 140.4,97.2 137.6,97.2 Z" id="Shape" class="fill-primary-200" fill-rule="nonzero"></path>
            <path d="M12.8,5.6 C13.6,2.8 16.2,0.7 19.3,0.7 L136.6,0.7 C140.4,0.7 143.4,3.7 143.4,7.5 L143.4,89.8 C143.4,93.3 140.8,96.2 137.4,96.6" id="Shape" class="stroke-primary-400" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M131.2,18 L131.2,99.9 C131.2,103.7 128.1,106.7 124.4,106.7 L7,106.7 C3.2,106.7 0.2,103.6 0.2,99.9 L0.2,10.8 L124,10.8 C128,10.8 131.2,14 131.2,18 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M121.7,10.8 C126.9,10.8 131.2,15.1 131.2,20.3 L131.2,99.9 C131.2,103.7 128.3,106.7 124.7,106.7 L12.6,106.7 C9,106.7 6.1,103.6 6.1,99.9 L6.1,10.8 L121.7,10.8 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <path d="M87.2,28 L0.2,28 L0.2,17.6 C0.2,13.8 3.2,10.8 7,10.8 L124.3,10.8 C128.1,10.8 131.1,13.8 131.1,17.6 L131.1,28 L108.2,28" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M122.8,27.7 L130.2,27.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M113.2,27.7 L114.1,27.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M0.7,27.7 L79.5,27.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <circle id="Oval" class="fill-primary-300" fill-rule="nonzero" cx="11.8" cy="19.5" r="2.9"></circle>
            <circle id="Oval" class="fill-primary-200" fill-rule="nonzero" cx="21.5" cy="19.5" r="2.9"></circle>
            <circle id="Oval" class="fill-primary-200" fill-rule="nonzero" cx="31.2" cy="19.5" r="2.9"></circle>
            <polyline id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" points="47.8 82.9 33.5 65.8 47.8 48.7"></polyline>
            <polyline id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" points="83.9 82.9 98.2 65.8 83.9 48.7"></polyline>
            <path d="M72.1,48.3 L59.6,84.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M0.2,67.4 L0.2,66.3" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M0.2,60.6 L0.2,17.5 C0.2,13.7 3.2,10.7 7,10.7 L124.3,10.7 C128.1,10.7 131.1,13.7 131.1,17.5 L131.1,99.8 C131.1,103.6 128.1,106.6 124.3,106.6 L7,106.6 C3.2,106.6 0.2,103.6 0.2,99.8 L0.2,80.5" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
        </g>
    </g>
</svg>
              </div>
              <div class="px-4 pb-5">
                <h5>Secondary Pages</h5>
                <p class="text-muted">Awesome collection of pages for any scenario.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
              <div class="px-4 py-5">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="131px" height="151px" viewBox="0 0 131 151" version="1.1" class="injected-svg svg-inject" style="height: 70px;">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Secure_Files</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Secure_Files" transform="translate(1.000000, 2.000000)">
            <g id="Group" transform="translate(8.000000, 5.000000)">
                <path d="M98.3,24 L119.5,108.9 C120.2,111.8 118.4,114.7 115.5,115.3 L32.7,134.9 C29.8,135.6 26.9,133.8 26.3,130.9 L0.3,21.5 C-0.4,18.6 1.4,15.7 4.3,15.1 L64.3,0.9 L98.3,24 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M98.5,24.5 L119.6,109.2 C120.2,111.9 118.6,114.7 115.8,115.3 L37.2,133.9 C34.5,134.5 31.7,132.9 31.1,130.1 L6.1,24.5 C5.5,21.8 7.1,19 9.9,18.4 L69.7,4.2 L98.5,24.5 Z" id="Shape" class="fill-primary-100" fill-rule="nonzero"></path>
                <path d="M64.3,0.9 L69.9,24.4 C70.7,27.6 74.2,29.7 77.4,28.9 L98.3,23.9" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M67.8,2.6 L72.9,23.9 C73.6,26.8 76.8,28.7 79.7,28 L98.7,23.5" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
                <path d="M68.9,6.9 L74,28.2 C74.7,31.1 77.9,33 80.8,32.3 L99.8,27.8 L98.8,23.5" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
                <path d="M68.7,19.2 L69.9,24.3 C70.7,27.5 74.2,29.6 77.4,28.8 L98.3,23.8" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M64.3,0.9 L67.3,13.6" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M9.5,60.1 L0.3,21.5 C-0.4,18.6 1.4,15.7 4.3,15.1 L64.3,0.9 L98.3,24 L119.5,108.9 C120.2,111.8 118.4,114.7 115.5,115.3 L32.7,134.9 C29.8,135.6 26.9,133.8 26.3,130.9 L8.8,57.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
            <g id="Group">
                <path d="M122.2,62.5 L90.1,143.9 C89,146.6 85.9,148 83.1,146.8 L4.3,114.7 C1.6,113.6 0.2,110.5 1.4,107.7 L43.9,3.5 C45,0.8 48.1,-0.6 50.9,0.6 L108,23.9 L122.2,62.5 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M122.1,63 L90.1,144.1 C89,146.7 86.1,147.9 83.5,146.9 L8.7,116.4 C6.1,115.3 4.9,112.4 5.9,109.8 L46.9,9.3 C48,6.7 50.9,5.5 53.5,6.5 L110.4,29.7 L122.1,63 Z" id="Shape" class="fill-primary-100" fill-rule="nonzero"></path>
                <path d="M108,24 L98.9,46.3 C97.6,49.4 99.3,53.1 102.4,54.4 L122.3,62.5" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M109.9,27.4 L101.6,47.7 C100.5,50.5 102,53.9 104.8,55 L122.9,62.4" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
                <path d="M108.2,31.5 L99.9,51.8 C98.8,54.6 100.3,58 103.1,59.1 L121.2,66.5 L122.9,62.4" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
                <path d="M100.9,41.5 L98.9,46.4 C97.6,49.5 99.3,53.2 102.4,54.5 L122.3,62.6" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M108,24 L103.1,36.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M35,25.3 L35.5,24.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M37.8,18.4 L43.8,3.6 C44.9,0.9 48,-0.5 50.8,0.7 L107.9,24 L122.1,62.6 L90,144 C88.9,146.7 85.8,148.1 83,146.9 L4.2,114.8 C1.5,113.7 0.1,110.6 1.3,107.8 L29.9,37.6" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
            <g id="Group" transform="translate(18.000000, 10.000000)">
                <path d="M96,118.2 C96,121.2 93.6,123.6 90.6,123.6 L5.5,123.6 C2.5,123.6 0.1,121.2 0.1,118.2 L0.1,5.7 C0.1,2.7 2.5,0.3 5.5,0.3 L67.2,0.3 L94.9,30.6 L95.5,81.4 L96,118.2 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M95.6,81.6 L92.8,81.6 C92.8,76.2 93.3,71.2 89.6,65.1 C89.6,65.1 89.6,65.1 89.6,65.1 C89.5,64.9 87.5,62 87.3,62 C80.9,54.7 70.5,52.5 61.7,56.4 L55.1,61 C51.1,65 48.6,70.5 48.6,76.6 L48.6,81.7 L44.4,81.7 C42.5,81.7 40.9,83.2 40.9,85.2 L40.9,123.8 L90.6,123.8 C93.6,123.8 96,121.4 96,118.4 L95.6,81.6 Z M86.8,81.6 L54.7,81.6 L54.7,76.5 C54.7,62.6 71.5,54.8 82.1,65.2 C87.5,70.5 86.8,76.5 86.8,81.6 Z" id="Shape" class="fill-primary-100" fill-rule="nonzero"></path>
                <path d="M29.2,89.9 L80.3,89.9" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M14,89.9 L23,89.9" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M57.3,76.1 L80.1,76.1" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M14.5,76.1 L47.7,76.1" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M71.7,62.3 L80.6,62.3" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M14.9,62.3 L63.6,62.3" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M38.6,104.9 L41.6,104.9" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M14.9,104.9 L33,104.9" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M49.6,48.6 L81,48.6" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M15.3,48.6 L39.6,48.6" id="Shape" class="stroke-primary-300" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M15.8,17.1 L56.6,17.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M15.8,26.8 L31.4,26.8" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M67.3,0.5 L67.3,24.6 C67.3,27.9 70.2,30.8 73.6,30.8 L95.1,30.8" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M70.3,2.9 L70.3,24.8 C70.3,27.8 73,30.4 76,30.4 L95.5,30.4" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
                <path d="M70.3,7.3 L70.3,29.2 C70.3,32.2 73,34.8 76,34.8 L95.5,34.8 L95.5,30.4" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
                <path d="M67.3,19.3 L67.3,24.6 C67.3,27.9 70.2,30.8 73.6,30.8 L95.1,30.8" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M67.3,0.5 L67.3,13.5" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M0.2,29.2 L0.2,27.9" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M0.2,21.7 L0.2,5.7 C0.2,2.7 2.6,0.3 5.6,0.3 L67.3,0.3 L95,30.6 L96,118.1 C96,121.1 93.6,123.5 90.6,123.5 L5.5,123.5 C2.5,123.5 0.1,121.1 0.1,118.1 L0.1,42.3" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
            <g id="Group" transform="translate(66.000000, 60.000000)">
                <path d="M46.5,8.3 C42.6,4.9 37.5,2.8 32,2.8 C19.8,2.8 9.9,12.7 9.9,24.9 L9.9,28 L13.9,28 L13.9,22.9 C13.9,14.1 21.1,6.9 29.9,6.9 C34.9,6.9 39.3,9.2 42.2,12.7 C44.5,15.5 45.9,19.1 45.9,23 L45.9,28.1 L52,28.1 L52,23 C51.9,17.3 49.9,12.2 46.5,8.3 Z" id="Shape" class="fill-primary-400" fill-rule="nonzero"></path>
                <path d="M55.8,78.9 L3.6,78.9 C1.6,78.9 4.54747351e-13,77.3 4.54747351e-13,75.3 L4.54747351e-13,31.6 C4.54747351e-13,29.6 1.6,28 3.6,28 L55.8,28 C57.8,28 59.4,29.6 59.4,31.6 L59.4,75.3 C59.4,77.3 57.8,78.9 55.8,78.9 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M59.4,33.7 L59.4,75.7 C59.4,77.5 58,78.9 56.2,78.9 L8,78.9 C6.2,78.9 4.8,77.5 4.8,75.7 L4.8,33.7 C4.8,31.9 6.2,30.5 8,30.5 L56.2,30.5 C56.5,30.5 56.7,30.5 57,30.6 C58.4,30.9 59.4,32.2 59.4,33.7 Z" id="Shape" class="fill-primary-500" fill-rule="nonzero"></path>
                <path d="M57,30.6 L57,69 C57,70.8 55.6,72.2 53.8,72.2 L5.6,72.2 C5.3,72.2 5,72.2 4.8,72.1 L4.8,33.7 C4.8,31.9 6.2,30.5 8,30.5 L56.2,30.5 C56.5,30.5 56.7,30.5 57,30.6 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
                <path d="M0.1,43.1 L0.1,42.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M59.4,75.6 C59.3,77.4 57.8,78.8 56,78.8 L3.6,78.8 C1.7,78.8 0.2,77.3 0.2,75.4 L0.2,50.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M59.4,54.6 L59.4,71.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M0.1,38.9 L0.1,31.4 C0.1,29.5 1.6,28 3.5,28 L55.9,28 C57.8,28 59.3,29.5 59.3,31.4 L59.3,44.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M24.3,49 C24.2,51.8 25,53.7 27.6,54.4 L27.6,61.8 C27.6,62.7 28.3,63.5 29.3,63.5 C30.2,63.5 32,62.8 32,61.8 L32,55 C34.5,54.3 36.4,51.9 36.4,49.2 C36.4,45.6 33.3,42.8 29.6,43.2 C26.8,43.5 24.6,45.8 24.3,48.6 C24.3,48.6 24.3,48.8 24.3,49" id="Shape" class="fill-primary-600" fill-rule="nonzero"></path>
                <path d="M27.9,61.3 L27.9,61.7 C27.9,62.7 28.7,63.5 29.7,63.5 C30.7,63.5 31.5,62.7 31.5,61.7 L31.5,54.2 C34.3,53.4 36.3,50.8 36.3,47.8 C36.3,43.9 32.9,40.7 28.9,41.2 C25.8,41.5 23.4,44 23,47.1 C23,47.4 23,47.6 23,47.9" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M24.2,51.3 C25.1,52.6 26.4,53.6 28,54.1 L28,56.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M16.6,5.2 C16.5,5.3 16.4,5.4 16.3,5.4 M14.3,7.3 C10.3,11.3 7.8,16.8 7.8,22.9 L7.8,28 L13.9,28 L13.9,22.9 C13.9,14.1 21.1,6.9 29.9,6.9 C38.7,6.9 45.9,14.1 45.9,22.9 L45.9,28 L52,28 L52,22.9 C52,10.7 42.1,0.8 29.9,0.8 C26.7,0.8 23.7,1.5 20.9,2.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
        </g>
    </g>
</svg>
              </div>
              <div class="px-4 pb-5">
                <h5>Authentication</h5>
                <p class="text-muted">Provide users good looking forms that inspire trust.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
              <div class="px-4 py-5">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="148px" height="144px" viewBox="0 0 148 144" version="1.1" class="injected-svg svg-inject" style="height: 70px;">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Task</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Task" transform="translate(2.000000, 2.000000)">
            <g id="Group" transform="translate(0.000000, 137.000000)" class="stroke-primary-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M1.1,0.4 L0,0.4" id="Shape"></path>
                <path d="M21.2,0.4 L5.4,0.4" id="Shape"></path>
                <path d="M26.9,0.4 L25.9,0.4" id="Shape"></path>
                <path d="M113.4,0.4 L32.6,0.4" id="Shape"></path>
                <path d="M142.9,0.4 L118,0.4" id="Shape"></path>
            </g>
            <path d="M22.5,8.7 L102.5,8.7 C104.5,8.7 106.1,10.3 106.1,12.3 L106.1,133.3 C106.1,135.3 104.5,136.9 102.5,136.9 L10.8,136.9 C8.8,136.9 7.2,135.3 7.2,133.3 L7.2,12.3 C7.2,10.3 8.8,8.7 10.8,8.7 L16.1,8.7" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M16,8.7 L17.5,8.7" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M106.1,17.7 L106.1,133.3 C106.1,135.3 104.5,136.9 102.5,136.9 L14.9,136.9 C12.9,136.9 11.3,135.3 11.3,133.3 L11.3,17.7 C11.3,15.7 12.9,14.1 14.9,14.1 L102.5,14.1 C104.5,14.1 106.1,15.7 106.1,17.7 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <path d="M99.9,25.4 L99.9,128.5 C99.9,130 98.7,131.2 97.2,131.2 L19.6,131.2 C18.1,131.2 16.9,130 16.9,128.5 L16.9,25.4 C16.9,23.9 18.1,22.7 19.6,22.7 L97.2,22.7 C98.7,22.7 99.9,23.9 99.9,25.4 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M108.1,75.6 L108.1,128 C108.1,129.7 106.7,131.2 104.9,131.2 L81.6,131.2 C75.6,125.3 71.9,117.1 71.9,108 C71.9,90 86.5,75.4 104.5,75.4 C105.7,75.4 106.9,75.5 108.1,75.6 Z" id="Shape" class="fill-primary-400" fill-rule="nonzero"></path>
            <path d="M7.2,93.7 L7.2,12.3 C7.2,10.3 8.8,8.7 10.8,8.7 L12.9,8.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M24.6,8.7 L102.5,8.7 C104.5,8.7 106.1,10.3 106.1,12.3 L106.1,133.3 C106.1,135.3 104.5,136.9 102.5,136.9 L10.8,136.9 C8.8,136.9 7.2,135.3 7.2,133.3 L7.2,112.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M19,8.7 L19.2,8.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M85.3,10.3 C85.3,12 84.6,13.5 83.6,14.5 C82.5,15.6 81,16.3 79.4,16.3 L34,16.3 C30.7,16.3 28,13.6 28,10.3 C28,9.4 28.2,8.6 28.5,7.9 C28.8,7.2 29.2,6.6 29.8,6.1 C30.9,5 32.4,4.4 34,4.4 L53.9,4.4 C53.8,4.7 53.7,5.1 53.7,5.4 C53.7,7.1 55,8.4 56.7,8.4 C58.4,8.4 59.7,7.1 59.7,5.4 C59.7,5 59.6,4.7 59.5,4.4 L79.4,4.4 C81.9,4.4 84,5.9 84.9,8 C85.1,8.6 85.3,9.4 85.3,10.3 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M79.7,7.3 C82,7.3 84,8.4 84.8,10 C85.1,10.5 85.3,11.1 85.3,11.8 C85.3,13 84.7,14.1 83.7,15 C82.7,15.8 81.3,16.3 79.7,16.3 L37.2,16.3 C34.1,16.3 31.6,14.3 31.6,11.8 C31.6,11.2 31.8,10.6 32.1,10 C32.4,9.5 32.8,9 33.3,8.6 C34.3,7.8 35.7,7.3 37.3,7.3 L79.7,7.3 Z" id="Shape" class="fill-primary-100" fill-rule="nonzero"></path>
            <g id="Group" transform="translate(27.000000, 0.000000)" class="stroke-primary" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M8.4,16.2 L6.9,16.2 C3.6,16.2 0.9,13.5 0.9,10.2 C0.9,9.3 1.1,8.5 1.4,7.8 C1.7,7.1 2.1,6.5 2.7,6 C3.8,4.9 5.3,4.3 6.9,4.3 L19.1,4.3" id="Shape"></path>
                <path d="M37.3,16.2 L14.7,16.2" id="Shape"></path>
                <path d="M25.3,4.3 L26.9,4.3 C26.8,4.6 26.7,5 26.7,5.3 C26.7,7 28,8.3 29.7,8.3 C31.4,8.3 32.7,7 32.7,5.3 C32.7,4.9 32.6,4.6 32.5,4.3 L52.4,4.3 C54.9,4.3 57,5.8 57.9,7.9 C58.2,8.6 58.4,9.4 58.4,10.3 C58.4,12 57.7,13.5 56.7,14.5 C55.8,15.4 54.6,16 53.2,16.2" id="Shape"></path>
                <path d="M29.5,0.4 C29.6,0.4 29.6,0.4 29.7,0.4 C32.2,0.4 34.2,2.4 34.2,4.9 C34.2,7.4 32.2,9.4 29.7,9.4 C27.2,9.4 25.2,7.4 25.2,4.9 C25.2,4 25.4,3.2 25.9,2.6" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            </g>
            <g id="Group" transform="translate(26.000000, 41.000000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M50.9,0.1 L62.2,0.1" id="Shape" class="stroke-primary-300"></path>
                <path d="M17.8,0.1 L42.8,0.1" id="Shape" class="stroke-primary"></path>
                <path d="M0.8,0.1 L9,0.1" id="Shape" class="stroke-primary-300"></path>
                <path d="M25.7,8.7 L30.3,8.7" id="Shape" class="stroke-primary-300"></path>
                <path d="M0.8,8.7 L15.9,8.7" id="Shape" class="stroke-primary"></path>
            </g>
            <g id="Group" transform="translate(26.000000, 61.000000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M50.9,0.7 L62.2,0.7" id="Shape" class="stroke-primary-300"></path>
                <path d="M17.8,0.7 L42.8,0.7" id="Shape" class="stroke-primary"></path>
                <path d="M0.8,0.7 L9,0.7" id="Shape" class="stroke-primary-300"></path>
                <path d="M25.7,9.2 L30.3,9.2" id="Shape" class="stroke-primary"></path>
                <path d="M0.8,9.2 L15.9,9.2" id="Shape" class="stroke-primary-300"></path>
            </g>
            <g id="Group" transform="translate(26.000000, 82.000000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M50.9,0.2 L62.2,0.2" id="Shape" class="stroke-primary"></path>
                <path d="M17.8,0.2 L42.8,0.2" id="Shape" class="stroke-primary-300"></path>
                <path d="M0.8,0.2 L9,0.2" id="Shape" class="stroke-primary"></path>
                <path d="M25.7,8.7 L30.3,8.7" id="Shape" class="stroke-primary"></path>
                <path d="M0.8,8.7 L15.9,8.7" id="Shape" class="stroke-primary-300"></path>
            </g>
            <g id="Group" transform="translate(26.000000, 102.000000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M50.9,0.7 L62.2,0.7" id="Shape" class="stroke-primary-300"></path>
                <path d="M17.8,0.7 L42.8,0.7" id="Shape" class="stroke-primary-300"></path>
                <path d="M0.8,0.7 L9,0.7" id="Shape" class="stroke-primary-300"></path>
                <path d="M25.7,9.3 L30.3,9.3" id="Shape" class="stroke-primary"></path>
                <path d="M0.8,9.3 L15.9,9.3" id="Shape" class="stroke-primary"></path>
            </g>
            <circle id="Oval" stroke-width="3" class="fill-primary-400 stroke-primary-400" fill-rule="nonzero" cx="111.7" cy="107.4" r="32.7"></circle>
            <path d="M101.3,138.4 C88.3,134.1 79,121.8 79,107.4 C79,89.3 93.7,74.7 111.7,74.7 C113.5,74.7 115.2,74.8 116.9,75.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M140.1,91.1 C142.8,95.9 144.4,101.4 144.4,107.3 C144.4,125.4 129.7,140 111.7,140 C111.5,140 111.2,140 111,140" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M125.6,77.7 C127.5,78.6 129.2,79.6 130.9,80.8" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M108.6,120.2 C107.4,120.2 106.3,119.7 105.5,118.9 L96.3,109.7 C94.6,108 94.6,105.2 96.3,103.5 C98,101.8 100.8,101.8 102.5,103.5 L108.6,109.6 L122.4,95.8 C124.1,94.1 126.9,94.1 128.6,95.8 C130.3,97.5 130.3,100.3 128.6,102 L111.7,118.9 C110.9,119.8 109.7,120.2 108.6,120.2 Z" id="Shape" stroke-width="3" class="stroke-primary fill-neutral" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round"></path>
        </g>
    </g>
</svg>
              </div>
              <div class="px-4 pb-5">
                <h5>Account Pages</h5>
                <p class="text-muted">Profile and account managemend made cool.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
              <div class="px-4 py-5">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="153px" height="132px" viewBox="0 0 153 132" version="1.1" class="injected-svg svg-inject" style="height: 70px;">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Cart_Add_2</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Cart_Add_2" transform="translate(2.000000, 2.000000)">
            <g id="Group" transform="translate(16.000000, 127.000000)" class="stroke-primary-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M1.6,0.9 L0.5,0.9" id="Shape"></path>
                <path d="M95.3,0.9 L7.9,0.9" id="Shape"></path>
                <path d="M126.2,0.9 L100.3,0.9" id="Shape"></path>
                <path d="M132.6,0.9 L130.8,0.9" id="Shape"></path>
            </g>
            <path d="M133,34 C131.3,31.6 128.6,30.3 125.7,30.3 C125.7,30.3 125.7,30.3 125.6,30.3 L46,30.3 C43.4,30.3 41.3,32.4 41.3,35 C41.3,37.6 43.4,39.7 46,39.7 L125.4,39.7 L115.8,70.7 C115.1,72.9 113.1,74.3 110.9,74.3 L44.9,74.3 L25.9,11.6 C24.6,7.4 20.8,4.5 16.3,4.5 L4.8,4.5 C2.2,4.5 0.1,6.6 0.1,9.2 C0.1,11.8 2.2,13.9 4.8,13.9 L16.3,13.9 C16.6,13.9 16.9,14.1 17,14.4 L40,90.1 C41.8,95.9 47.2,99.8 53.2,99.8 L111.3,99.8 C113.9,99.8 116,97.7 116,95.1 C116,92.5 113.9,90.4 111.3,90.4 L53.2,90.4 C51.2,90.4 49.4,89.1 48.8,87.2 L47.7,83.6 L110.9,83.6 C117.3,83.6 122.8,79.5 124.7,73.4 L134.3,42.3 C135.3,39.4 134.8,36.4 133,34 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M134.6,41.3 C134.5,41.6 134.5,41.9 134.4,42.2 L124.8,73.3 C122.9,79.4 117.4,83.5 111,83.5 L47.9,83.5 L50.9,90.8 C51.5,92.7 53.2,94 55.3,94 L111.6,94 C113.5,94 115.1,95.1 115.9,96.8 C115.2,98.4 113.5,99.6 111.6,99.6 L53.5,99.6 C47.4,99.6 42.1,95.7 40.2,89.9 L17.2,14.2 C17.1,13.9 16.8,13.7 16.5,13.7 L5,13.7 C3.1,13.7 1.5,12.6 0.7,10.9 C1.4,9.3 3.1,8.1 5,8.1 L16.5,8.1 C20.9,8.1 24.8,11 26.1,15.2 L45.1,74.2 L111.1,74.2 C113.4,74.2 115.4,72.7 116,70.6 L125.6,43.4 L124.4,43.4 L125.6,39.7 L46.2,39.7 C44.3,39.7 42.6,38.6 41.9,36.9 C42.6,35.3 44.2,34.1 46.2,34.1 L125.9,34.1 C128.8,34.1 131.5,35.5 133.2,37.8 C133.8,38.9 134.4,40.1 134.6,41.3 Z" id="Shape" class="fill-primary-200" fill-rule="nonzero"></path>
            <path d="M119.5,39.6 L125.5,39.6 L115.9,70.6 C115.2,72.8 113.2,74.2 111,74.2 L45,74.2 L26,11.5 C24.7,7.3 20.9,4.4 16.4,4.4 L4.9,4.4 C2.3,4.4 0.2,6.5 0.2,9.1 C0.2,11.7 2.3,13.8 4.9,13.8 L16.4,13.8 C16.7,13.8 17,14 17.1,14.3 L40.1,90 C41.9,95.8 47.3,99.7 53.3,99.7 L111.4,99.7 C114,99.7 116.1,97.6 116.1,95 C116.1,92.4 114,90.3 111.4,90.3 L53.3,90.3 C51.3,90.3 49.5,89 48.9,87.1 L47.8,83.5 L111,83.5 C117.4,83.5 122.9,79.4 124.8,73.3 L134.4,42.2 C135.3,39.4 134.8,36.4 133,34 C131.3,31.6 128.6,30.3 125.7,30.3 C125.7,30.3 125.7,30.3 125.6,30.3 L121,30.3" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M47.3,30.3 L46.1,30.3 C43.5,30.3 41.4,32.4 41.4,35 C41.4,37.6 43.5,39.7 46.1,39.7 L48.8,39.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <circle id="Oval" stroke-width="3" class="stroke-primary fill-primary-400" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round" cx="55.4" cy="117.3" r="10.3"></circle>
            <circle id="Oval" stroke-width="3" class="stroke-primary fill-primary-100" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round" cx="55.4" cy="117.3" r="4.9"></circle>
            <circle id="Oval" stroke-width="3" class="stroke-primary fill-primary-400" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round" cx="104.8" cy="117.3" r="10.3"></circle>
            <circle id="Oval" stroke-width="3" class="stroke-primary fill-primary-100" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round" cx="104.8" cy="117.3" r="4.9"></circle>
            <g id="Group" transform="translate(53.000000, 0.000000)">
                <path d="M47.3,54.8 C42.6,57.9 37,59.7 31,59.7 C14.5,59.7 1.2,46.4 1.2,29.9 C1.2,13.4 14.5,0.1 31,0.1 C47.5,0.1 60.8,13.4 60.8,29.9 C60.7,40.3 55.4,49.5 47.3,54.8" id="Shape" class="fill-primary-500" fill-rule="nonzero"></path>
                <path d="M40.1,58.5 C39.8,58.6 39.6,58.6 39.3,58.7 C36.6,59.5 33.7,60 30.7,60 C24.1,60 17.9,57.8 13,54.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M1.2,34.6 C1,33.2 0.9,31.7 0.9,30.2 C0.9,13.7 14.2,0.4 30.7,0.4 C47.2,0.4 60.5,13.7 60.5,30.2 C60.5,39.4 56.3,47.7 49.7,53.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M6.2,47.2 C5.9,46.7 5.5,46.2 5.2,45.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <g transform="translate(13.000000, 12.000000)" fill-rule="nonzero" id="Shape">
                    <path d="M17.9,33.7 C15.9,33.7 13.7,32.2 13.7,29.5 L13.7,22.1 L6.3,22.1 C3.6,22.1 2.1,19.9 2.1,17.9 C2.1,16.8 2.5,15.8 3.1,15 C3.9,14.1 5,13.6 6.2,13.6 L13.6,13.6 L13.6,6.2 C13.6,3.5 15.8,2 17.8,2 C19.8,2 22,3.5 22,6.2 L22,13.6 L29.4,13.6 C30.7,13.6 31.8,14.1 32.5,15 C33.2,15.8 33.5,16.8 33.5,17.9 C33.5,19.9 32,22.1 29.3,22.1 L21.9,22.1 L21.9,29.5 C22.2,32.3 20,33.7 17.9,33.7 Z" class="fill-neutral"></path>
                    <path d="M17.9,3.5 C19.3,3.5 20.6,4.4 20.6,6.2 C20.6,8.1 20.6,11.5 20.6,15.1 C24.2,15.1 27.6,15.1 29.5,15.1 C33.1,15.1 33.1,20.5 29.5,20.5 C27.6,20.5 24.2,20.5 20.6,20.5 C20.6,24.1 20.6,27.5 20.6,29.4 C20.6,31.2 19.2,32.1 17.9,32.1 C16.5,32.1 15.2,31.2 15.2,29.4 C15.2,27.5 15.2,24.1 15.2,20.5 C11.6,20.5 8.2,20.5 6.3,20.5 C2.7,20.5 2.7,15.1 6.3,15.1 C8.2,15.1 11.6,15.1 15.2,15.1 C15.2,11.5 15.2,8.1 15.2,6.2 C15.2,4.4 16.6,3.5 17.9,3.5 Z M17.9,0.5 C16.5,0.5 15.1,1 14,1.9 C12.8,3 12.1,4.5 12.1,6.2 L12.1,12.1 L6.2,12.1 C3,12.1 0.5,14.6 0.5,17.8 C0.5,19.2 1,20.6 1.9,21.7 C3,22.9 4.5,23.6 6.2,23.6 L12.1,23.6 L12.1,29.5 C12.1,32.7 14.6,35.2 17.8,35.2 C21.1,35.2 23.5,32.8 23.5,29.5 L23.5,23.6 L29.4,23.6 C32.6,23.6 35.1,21.1 35.1,17.9 C35.1,14.6 32.7,12.2 29.4,12.2 L23.5,12.2 L23.5,6.3 C23.7,3 21.2,0.5 17.9,0.5 Z" class="fill-primary"></path>
                </g>
            </g>
        </g>
    </g>
</svg>
              </div>
              <div class="px-4 pb-5">
                <h5>Shop Pages</h5>
                <p class="text-muted">Complete front-end flow for e-commerce website.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
              <div class="px-4 py-5">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150px" height="151px" viewBox="0 0 150 151" version="1.1" class="injected-svg svg-inject" style="height: 70px;">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Cog_Wheels</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Cog_Wheels" transform="translate(2.000000, 1.000000)">
            <path d="M145.9,44.4 L145.9,36.9 C145.9,34.9 144.4,33.2 142.5,32.9 L139.4,32.4 C137.9,32.2 136.7,31.2 136.2,29.8 C135.8,28.8 135.4,27.8 134.9,26.8 C134.3,25.5 134.4,23.9 135.3,22.7 L137.2,20.2 C138.4,18.6 138.2,16.4 136.8,15 L131.5,9.7 C130.1,8.3 127.9,8.1 126.3,9.3 L123.8,11.2 C122.6,12.1 121,12.2 119.7,11.6 C118.7,11.1 117.7,10.7 116.7,10.3 C115.3,9.8 114.3,8.6 114.1,7.1 L113.6,4 C113.3,2 111.6,0.6 109.6,0.6 L102.1,0.6 C100.1,0.6 98.4,2.1 98.1,4 L97.6,7.1 C97.4,8.6 96.4,9.8 95,10.3 C94,10.7 93,11.1 92,11.6 C90.7,12.2 89.1,12.1 87.9,11.2 L85.4,9.3 C83.8,8.1 81.6,8.3 80.2,9.7 L74.9,15 C73.5,16.4 73.3,18.6 74.5,20.2 L76.4,22.7 C77.3,23.9 77.4,25.5 76.8,26.8 C76.3,27.8 75.9,28.8 75.5,29.8 C75,31.2 73.8,32.2 72.3,32.4 L69.2,32.9 C67.2,33.2 65.8,34.9 65.8,36.9 L65.8,44.4 C65.8,46.4 67.3,48.1 69.2,48.4 L72.3,48.9 C73.8,49.1 75,50.1 75.5,51.5 C75.9,52.5 76.3,53.5 76.8,54.5 C77.4,55.8 77.3,57.4 76.4,58.6 L74.5,61.1 C73.3,62.7 73.5,64.9 74.9,66.3 L80.2,71.6 C81.6,73 83.8,73.2 85.4,72 L87.9,70.1 C89.1,69.2 90.7,69.1 92,69.7 C93,70.2 94,70.6 95,71 C96.4,71.5 97.4,72.7 97.6,74.2 L98.1,77.3 C98.4,79.3 100.1,80.7 102.1,80.7 L109.6,80.7 C111.6,80.7 113.3,79.2 113.6,77.3 L114.1,74.2 C114.3,72.7 115.3,71.5 116.7,71 C117.7,70.6 118.7,70.2 119.7,69.7 C121,69.1 122.6,69.2 123.8,70.1 L126.3,72 C127.9,73.2 130.1,73 131.5,71.6 L136.8,66.3 C138.2,64.9 138.4,62.7 137.2,61.1 L135.3,58.6 C134.4,57.4 134.3,55.8 134.9,54.5 C135.4,53.5 135.8,52.5 136.2,51.5 C136.7,50.1 137.9,49.1 139.4,48.9 L142.5,48.4 C144.5,48.1 145.9,46.4 145.9,44.4 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M113,85.8 L113,96.3 C113,99.1 110.9,101.5 108.2,101.9 L103.8,102.5 C101.7,102.8 100,104.2 99.3,106.2 C98.8,107.7 98.2,109.1 97.5,110.5 C97,111.5 96.9,112.6 97,113.7 C97.1,114.7 97.5,115.6 98.1,116.4 L100.7,120 C101.7,121.3 102,122.9 101.7,124.4 C101.5,125.5 101,126.6 100.1,127.4 L92.7,134.8 C91.8,135.7 90.8,136.2 89.7,136.4 C88.2,136.7 86.6,136.3 85.4,135.4 L81.8,132.8 C81,132.2 80.2,131.9 79.3,131.8 C78.2,131.6 77.1,131.8 76,132.3 C74.6,133 73.2,133.5 71.7,134.1 C69.7,134.8 68.3,136.5 68,138.6 L67.4,143 C67,145.8 64.6,147.8 61.8,147.8 L51.3,147.8 C49.7,147.8 48.2,147.1 47.1,145.9 C46.4,145.1 45.9,144.1 45.7,142.9 L45.1,138.5 C45,137.6 44.6,136.8 44.1,136 C44.1,136 44.1,136 44.1,136 C43.4,135.1 42.5,134.4 41.4,134 C40.7,133.8 40,133.5 39.3,133.2 C38.6,132.9 37.9,132.6 37.1,132.2 C35.2,131.3 33,131.5 31.3,132.8 L27.7,135.4 C25.5,137.1 22.3,136.8 20.3,134.9 L12.9,127.5 C11.9,126.5 11.3,125.1 11.3,123.8 C11.2,122.5 11.6,121.2 12.4,120.2 L15,116.6 C16.3,114.9 16.5,112.7 15.6,110.8 C14.9,109.4 14.4,108 13.8,106.5 C13.1,104.5 11.4,103.1 9.3,102.8 L4.9,102.2 C2.1,101.8 0.1,99.4 0.1,96.6 L0.1,86.1 C0.1,83.3 2.2,80.9 4.9,80.5 L9.3,79.9 C11.4,79.6 13.1,78.2 13.8,76.2 C14.3,74.7 14.9,73.3 15.6,71.9 C16.5,70 16.3,67.8 15,66.1 L12.4,62.5 C10.7,60.2 11,57.1 12.9,55.1 L20.3,47.7 C22.3,45.7 25.4,45.5 27.7,47.2 L31.3,49.8 C33,51.1 35.2,51.3 37.1,50.4 C38.5,49.7 39.9,49.2 41.4,48.6 C43.4,47.9 44.8,46.2 45.1,44.1 L45.7,39.7 C46.1,36.9 48.5,34.9 51.3,34.9 L61.8,34.9 C63.4,34.9 64.8,35.5 65.8,36.6 C65.8,36.8 65.7,37.1 65.7,37.3 L65.7,44.8 C65.7,46.8 67.2,48.5 69.1,48.8 L71.9,49.2 L72.2,49.2 C72.8,49.3 73.3,49.5 73.8,49.8 C74.5,50.3 75.1,51 75.4,51.8 C75.8,52.8 76.2,53.8 76.7,54.8 C77.3,56.2 77.2,57.7 76.3,58.9 L74.4,61.4 C73.2,63 73.4,65.2 74.8,66.6 L80.1,71.9 C81.5,73.3 83.7,73.5 85.3,72.3 L87.8,70.4 C89,69.5 90.6,69.4 91.9,70 C92.9,70.5 93.9,70.9 94.9,71.3 C95.9,71.7 96.7,72.4 97.2,73.3 C97.4,73.6 97.5,74 97.5,74.3 C97.5,74.3 97.5,74.4 97.5,74.4 L98,77.5 C98.3,79.5 100,80.9 102,80.9 L109.5,80.9 C109.6,80.9 109.7,80.9 109.8,80.9 C110.2,81.1 110.6,81.4 111,81.7 C112.3,82.7 113,84.2 113,85.8 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M113,84.9 L113,98.1 C113,100 111.6,101.7 109.7,101.9 L105.3,102.5 C102.6,102.9 100.3,104.8 99.4,107.4 C98.9,108.8 98.3,110.2 97.7,111.5 C97.3,112.3 97.1,113 97,113.6 C96.2,118.3 100.8,121.2 101.7,124.2 C102.1,125.3 101.9,126.5 100.7,127.7 C92.7,135.7 92.6,136.3 90.5,136.3 C90.2,136.3 89.9,136.3 89.7,136.2 C89.2,136.1 88.7,135.9 88.2,135.5 L84.6,132.8 C83.3,131.8 81.8,131.3 80.2,131.3 C79.9,131.3 79.6,131.3 79.2,131.4 C78.4,131.5 77.6,131.7 76.9,132.1 C75.6,132.7 74.2,133.3 72.8,133.8 C64.5,136.8 70.4,147.4 63.4,147.4 L50.2,147.4 C48.8,147.4 47.6,146.7 46.9,145.5 C46.6,145.1 46.4,144.6 46.4,144.1 C46,141.2 45.9,138 43.9,135.7 C43.9,135.7 43.9,135.7 43.9,135.7 C43.2,134.9 42.2,134.2 40.9,133.8 C40.1,133.5 39.6,133.2 39.1,132.9 C38.7,132.7 38.3,132.4 37.7,132.1 C29.7,128.3 25.5,139.1 20.5,134.2 L13.6,128 L12.2,126.7 C11.1,125.6 10.8,124.5 11.1,123.3 C11.9,119.6 18.2,115.6 15.2,109.5 C14.6,108.2 14,106.8 13.5,105.4 C10.5,97.1 3.4,104.8 3.4,97.8 L3.4,87.3 C3.4,80.4 14.1,86.3 17,77.9 C19.5,70.8 21.7,71.2 15.3,62.6 C14.2,61.1 14.3,58.9 15.7,57.6 C23.7,49.6 23.8,49 25.9,49 C29.2,49 31.2,53.9 36.2,53.9 C38.7,53.9 39.2,53 43.5,51.5 C46.1,50.6 48,48.3 48.4,45.6 L49,41.2 C49.3,39.3 50.9,37.9 52.8,37.9 L61.1,37.9 L61.1,44.2 C61.1,48.4 64.2,52 68.3,52.6 L71.2,53 C71.6,54 72,55 72.4,56 L70.7,58.3 C68.2,61.6 68.6,66.4 71.5,69.3 L76.8,74.6 C78.4,76.2 80.5,77.1 82.8,77.1 C84.6,77.1 86.4,76.5 87.8,75.4 L90.1,73.7 C91.1,74.2 92.1,74.6 93.1,74.9 L93.5,77.8 C94.1,81.9 97.7,85 101.9,85 L109.4,85 C110.6,85 111.7,84.7 112.8,84.3 C113,84.7 113,84.8 113,84.9 Z" id="Shape" class="fill-primary-200" fill-rule="nonzero"></path>
            <path d="M145.9,44.4 L145.9,36.9 C145.9,34.9 144.4,33.2 142.5,32.9 L139.4,32.4 C137.9,32.2 136.7,31.2 136.2,29.8 C135.8,28.8 135.4,27.8 134.9,26.8 C134.3,25.5 134.4,23.9 135.3,22.7 L137.2,20.2 C138.4,18.6 138.2,16.4 136.8,15 L131.5,9.7 C130.1,8.3 127.9,8.1 126.3,9.3 L123.8,11.2 C122.6,12.1 121,12.2 119.7,11.6 C118.7,11.1 117.7,10.7 116.7,10.3 C115.3,9.8 114.3,8.6 114.1,7.1 L113.6,4 C113.3,2 111.6,0.6 109.6,0.6 L102.1,0.6 C100.1,0.6 98.4,2.1 98.1,4 L97.6,7.1 C97.4,8.6 96.4,9.8 95,10.3 C94,10.7 93,11.1 92,11.6 C90.7,12.2 89.1,12.1 87.9,11.2 L85.4,9.3 C83.8,8.1 81.6,8.3 80.2,9.7 L74.9,15 C73.5,16.4 73.3,18.6 74.5,20.2 L76.4,22.7 C77.3,23.9 77.4,25.5 76.8,26.8 C76.3,27.8 75.9,28.8 75.5,29.8 C75,31.2 73.8,32.2 72.3,32.4 L69.2,32.9 C67.2,33.2 65.8,34.9 65.8,36.9 L65.8,44.4 C65.8,46.4 67.3,48.1 69.2,48.4 L72.3,48.9 C73.8,49.1 75,50.1 75.5,51.5 C75.9,52.5 76.3,53.5 76.8,54.5 C77.4,55.8 77.3,57.4 76.4,58.6 L74.5,61.1 C73.3,62.7 73.5,64.9 74.9,66.3 L80.2,71.6 C81.6,73 83.8,73.2 85.4,72 L87.9,70.1 C89.1,69.2 90.7,69.1 92,69.7 C93,70.2 94,70.6 95,71 C96.4,71.5 97.4,72.7 97.6,74.2 L98.1,77.3 C98.4,79.3 100.1,80.7 102.1,80.7 L109.6,80.7 C111.6,80.7 113.3,79.2 113.6,77.3 L114.1,74.2 C114.3,72.7 115.3,71.5 116.7,71 C117.7,70.6 118.7,70.2 119.7,69.7 C121,69.1 122.6,69.2 123.8,70.1 L126.3,72 C127.9,73.2 130.1,73 131.5,71.6 L136.8,66.3 C138.2,64.9 138.4,62.7 137.2,61.1 L135.3,58.6 C134.4,57.4 134.3,55.8 134.9,54.5 C135.4,53.5 135.8,52.5 136.2,51.5 C136.7,50.1 137.9,49.1 139.4,48.9 L142.5,48.4 C144.5,48.1 145.9,46.4 145.9,44.4 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M145.9,46 L145.9,37.1 C145.9,35.2 144.5,33.6 142.6,33.3 L139.6,32.9 C138.2,32.7 137,31.7 136.5,30.4 C136.1,29.4 135.7,30.2 135.3,29.3 C134.7,28 134.1,25.8 135,24.6 L135.9,21 C137,19.5 138.5,19.2 137.1,17.9 L132.1,12.9 C130.8,11.6 128.6,11.4 127.1,12.5 L124.7,14.3 C123.6,15.2 122,15.3 120.7,14.7 C119.8,14.3 118.8,13.9 117.8,13.5 C116.5,13 115.5,11.9 115.3,10.4 L114.9,7.4 C114.6,5.5 113,4.1 111.1,4.1 L104,4.1 C102.1,4.1 100.5,5.5 100.2,7.4 L99.8,10.4 C99.6,11.8 98.6,13 97.3,13.5 C96.3,13.9 95.3,14.3 94.4,14.7 C93.1,15.3 91.6,15.2 90.4,14.3 L88,12.5 C86.5,11.4 84.3,11.5 83,12.9 L78,17.9 C76.7,19.2 76.5,21.4 77.6,22.9 L79.4,25.3 C80.3,26.4 80.4,28 79.8,29.3 C79.4,30.2 79,31.2 78.6,32.2 C78.1,33.5 77,34.5 75.5,34.7 L72.5,35.1 C70.6,35.4 69.2,37 69.2,38.9 L69.2,47.8 C69.2,49.7 68.8,48.7 70.7,48.9 L73.7,49.3 C75.1,49.5 73.6,49.6 74.1,50.9 C74.5,51.9 74.9,51.1 75.3,52 C75.9,53.3 77.6,57.5 76.7,58.6 L74.9,61 C73.8,62.5 73.9,64.7 75.3,66 L81.2,71.9 C82.5,73.2 82.9,72.5 84.4,71.4 L88.6,69.6 C89.7,68.7 93,69.5 94.3,70.1 C95.2,70.5 94.4,70.1 95.4,70.4 C96.7,70.9 97.7,72 97.9,73.5 L98.3,76.5 C98.6,78.4 102,80.7 103.9,80.7 L111,80.7 C112.9,80.7 114.5,79.3 114.8,77.4 L115.2,74.4 C115.4,73 116.4,71.8 117.7,71.3 C118.7,70.9 119.7,70.5 120.6,70.1 C121.9,69.5 123.4,69.6 124.6,70.5 L127,72.3 C128.5,73.4 130.7,73.3 132,71.9 L137,66.9 C138.3,65.6 138.5,63.4 137.4,61.9 L135.6,59.5 C134.7,58.4 134.6,56.8 135.2,55.5 C135.6,54.6 136,53.6 136.4,52.6 C136.9,51.3 138,50.3 139.5,50.1 L142.5,49.7 C144.5,49.6 145.9,47.9 145.9,46 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <circle id="Oval" class="fill-neutral" fill-rule="nonzero" cx="105.8" cy="40.7" r="14"></circle>
            <path d="M104.5,26.8 C104.9,26.8 105.4,26.7 105.8,26.7 C113.5,26.7 119.8,33 119.8,40.7 C119.8,48.4 113.5,54.7 105.8,54.7 C98.1,54.7 91.8,48.4 91.8,40.7 C91.8,37.6 92.8,34.7 94.5,32.4" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M97.8,29.2 C98.3,28.8 98.9,28.5 99.4,28.2" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M123.8,11.2 C122.6,12.1 121,12.2 119.7,11.6 C118.7,11.1 117.7,10.7 116.7,10.3 C115.3,9.8 114.3,8.6 114.1,7.1 L113.6,4 C113.3,2 111.6,0.6 109.6,0.6 L102.1,0.6 C100.1,0.6 98.4,2.1 98.1,4 L97.6,7.1 C97.4,8.6 96.4,9.8 95,10.3 C94,10.7 93,11.1 92,11.6 C90.7,12.2 89.1,12.1 87.9,11.2 L85.4,9.3 C83.8,8.1 81.6,8.3 80.2,9.7 L74.9,15 C73.5,16.4 73.3,18.6 74.5,20.2 L76.4,22.7 C77.3,23.9 77.4,25.5 76.8,26.8 C76.3,27.8 75.9,28.8 75.5,29.8 C75,31.2 73.8,32.2 72.3,32.4 L69.2,32.9 C67.2,33.2 65.8,34.9 65.8,36.9 L65.8,44.4 C65.8,46.4 67.3,48.1 69.2,48.4 L72.3,48.9 C73.8,49.1 75,50.1 75.5,51.5 C75.9,52.5 76.3,53.5 76.8,54.5 C77.4,55.8 77.3,57.4 76.4,58.6 L74.5,61.1 C73.3,62.7 73.5,64.9 74.9,66.3 L80.2,71.6 C81.6,73 83.8,73.2 85.4,72 L87.9,70.1 C89.1,69.2 90.7,69.1 92,69.7 C93,70.2 94,70.6 95,71 C96.4,71.5 97.4,72.7 97.6,74.2 L98.1,77.3 C98.4,79.3 100.1,80.7 102.1,80.7 L109.6,80.7 C111.6,80.7 113.3,79.2 113.6,77.3 L114.1,74.2 C114.3,72.7 115.3,71.5 116.7,71 C117.7,70.6 118.7,70.2 119.7,69.7 C121,69.1 122.6,69.2 123.8,70.1 L126.3,72 C127.9,73.2 130.1,73 131.5,71.6 L136.8,66.3 C138.2,64.9 138.4,62.7 137.2,61.1 L135.3,58.6 C134.4,57.4 134.3,55.8 134.9,54.5 C135.4,53.5 135.8,52.5 136.2,51.5 C136.7,50.1 137.9,49.1 139.4,48.9 L142.5,48.4 C144.5,48.1 145.9,46.4 145.9,44.4 L145.9,36.9 C145.9,34.9 144.4,33.2 142.5,32.9 L139.4,32.4 C137.9,32.2 136.7,31.2 136.2,29.8 C135.8,28.8 135.4,27.8 134.9,26.8 C134.3,25.5 134.4,23.9 135.3,22.7 L137.2,20.2 C138.4,18.6 138.2,16.4 136.8,15 L131.5,9.7 C130.7,8.9 129.6,8.5 128.5,8.5" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M42.7,77 C46.3,73.5 51.1,71.4 56.5,71.4 C67.4,71.4 76.2,80.2 76.2,91.1 C76.2,102 67.4,110.8 56.5,110.8 C45.6,110.8 36.8,102 36.8,91.1 C36.8,85.6 39,80.6 42.7,77" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M28.7,73.1 C29.2,72.4 29.7,71.7 30.2,71" id="Shape" class="stroke-primary-300" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M33.3,114.7 C27.2,108.7 23.4,100.3 23.4,91.1 C23.4,87 24.2,83 25.5,79.4" id="Shape" class="stroke-primary-300" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M45.2,122.2 C43.7,121.7 42.3,121 40.9,120.3" id="Shape" class="stroke-primary-300" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M88.2,100.5 C87.6,102.6 86.7,104.7 85.7,106.6" id="Shape" class="stroke-primary-300" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M53.3,58.2 C54.3,58.1 55.4,58.1 56.4,58.1 C59.7,58.1 62.9,58.6 65.9,59.5" id="Shape" class="stroke-primary-300" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M42,61.3 C42.1,61.2 42.2,61.2 42.3,61.1" id="Shape" class="stroke-primary-300" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M33.3,67.5 C35.8,65 38.8,62.9 42,61.4" id="Shape" class="stroke-primary-300" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M46.2,74.3 C46.3,74.2 46.4,74.2 46.5,74.1" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M51.3,72.1 C52.9,71.7 54.7,71.4 56.4,71.4 C67.3,71.4 76.1,80.2 76.1,91.1 C76.1,102 67.3,110.8 56.4,110.8 C45.5,110.8 36.7,102 36.7,91.1 C36.7,87.5 37.7,84.1 39.3,81.2" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M22.1,46.2 C23.9,45.5 26,45.7 27.6,46.9 L31.2,49.5 C32.9,50.8 35.1,51 37,50.1 C38.4,49.4 39.8,48.9 41.3,48.3 C43.3,47.6 44.7,45.9 45,43.8 L45.6,39.4 C46,36.6 48.4,34.6 51.2,34.6 L58.4,34.6" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M16.5,51.2 L16.8,50.9" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M102.2,103 C100.8,103.6 99.7,104.8 99.2,106.3 C98.7,107.8 98.1,109.2 97.4,110.6 C96.9,111.6 96.8,112.7 96.9,113.8 C97,114.8 97.4,115.7 98,116.5 L100.6,120.1 C101.6,121.4 101.9,123 101.6,124.5 C101.4,125.6 100.9,126.7 100,127.5 L92.6,134.9 C91.7,135.8 90.7,136.3 89.6,136.5 C88.1,136.8 86.5,136.4 85.3,135.5 L81.7,132.9 C80.9,132.3 80.1,132 79.2,131.9 C78.1,131.7 77,131.9 75.9,132.4 C74.5,133.1 73.1,133.6 71.6,134.2 C69.6,134.9 68.2,136.6 67.9,138.7 L67.3,143.1 C66.9,145.9 64.5,147.9 61.7,147.9 L51.2,147.9 C49.6,147.9 48.1,147.2 47,146 C46.3,145.2 45.8,144.2 45.6,143 L45,138.6 C44.9,137.7 44.5,136.9 44,136.1 C44,136.1 44,136.1 44,136.1 C43.3,135.2 42.4,134.5 41.3,134.1 C40.6,133.9 39.9,133.6 39.2,133.3 C38.5,133 37.8,132.7 37,132.3 C35.1,131.4 32.9,131.6 31.2,132.9 L27.6,135.5 C25.4,137.2 22.2,136.9 20.2,135 L12.8,127.6 C11.8,126.6 11.2,125.2 11.2,123.9 C11.1,122.6 11.5,121.3 12.3,120.3 L14.9,116.7 C16.2,115 16.4,112.8 15.5,110.9 C14.8,109.5 14.3,108.1 13.7,106.6 C13,104.6 11.3,103.2 9.2,102.9 L4.8,102.3 C2,101.9 0,99.5 0,96.7 L0,86.2 C0,83.4 2.1,81 4.8,80.6 L9.2,80 C11.3,79.7 13,78.3 13.7,76.3 C14.2,74.8 14.8,73.4 15.5,72 C16.4,70.1 16.2,67.9 14.9,66.2 L12.3,62.6 C10.9,60.7 10.8,58.1 12.1,56.2" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M112.8,84.5 C112.9,84.9 113,85.4 113,85.9 L113,96.4 C113,99.1 111.2,101.3 108.6,101.9" id="Shape" class="stroke-primary" stroke-width="2.6669" stroke-linecap="round" stroke-linejoin="round"></path>
        </g>
    </g>
</svg>
              </div>
              <div class="px-4 pb-5">
                <h5>Utility Pages</h5>
                <p class="text-muted">Error pages and everything else can be found here.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="fluid-paragraph text-center mt-5">
        <p>
          <strong class="text-primary">*Good to know!</strong> You are not limited to the examples we've built. We have the liberty to choose any of the page layouts and components from the package and create your own version.
        </p>
      </div>
    </section>
    <!-- Features (v2) -->
    <section class="slice slice-lg">
      <div class="container">
        <div class="row row-grid justify-content-around align-items-center">
          <div class="col-lg-5 order-lg-2">
            <div class=" pr-lg-4">
              <h5 class=" h3">Change the way you build wesites. Forever.</h5>
              <p class="lead mt-4 mb-5">With Purpose you get components and examples, including tons of variables that will help you customize this theme with ease.</p><a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" class="link link-underline-primary">Purchase now</a>
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <img alt="Image placeholder" src="assets/img/theme/light/presentation-1.png" class="img-fluid img-center">
          </div>
        </div>
      </div>
    </section>
    <!-- Features (v3) -->
    <section class="slice slice-lg">
      <div class="container">
        <div class="row row-grid justify-content-around align-items-center">
          <div class="col-lg-5">
            <div class="">
              <h5 class=" h3">A complete solution for developers &amp; designers</h5>
              <p class="lead my-4">With Purpose you get components and examples, including tons of variables that will help you customize this theme with ease.</p>
              <ul class="list-unstyled">
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="icon icon-shape icon-primary icon-sm rounded-circle mr-3">
                        <i class="fas fa-store-alt"></i>
                      </div>
                    </div>
                    <div>
                      <span class="h6 mb-0">Perfect for modern startups</span>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="icon icon-shape icon-warning icon-sm rounded-circle mr-3">
                        <i class="fas fa-palette"></i>
                      </div>
                    </div>
                    <div>
                      <span class="h6 mb-0">Built with customization and ease-of-use at its core</span>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3">
                        <i class="fas fa-cog"></i>
                      </div>
                    </div>
                    <div>
                      <span class="h6 mb-0">Quality design and thoughfully crafted code</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <img alt="Image placeholder" src="assets/img/theme/light/presentation-2.png" class="img-fluid img-center">
          </div>
        </div>
      </div>
    </section>
    <!-- Features (v4) -->
    <section class="slice slice-lg bg-section-secondary overflow-hidden">
      <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
        <figure class="w-100">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1500 820" class="injected-svg svg-inject" style="height: 1000px;">
    <path class="fill-cyan" d="M 177.67 511.271 L 144.933 477.895 C 141.713 474.613 141.713 469.414 144.933 466.132 L 177.67 432.758 C 180.89 429.474 185.989 429.474 189.209 432.758 L 221.946 466.132 C 225.167 469.414 225.167 474.613 221.946 477.895 L 189.209 511.271 C 186.257 514.553 180.89 514.553 177.67 511.271 Z"></path>
    <circle class="fill-pink" cx="1209.162" cy="110.471" r="34.859"></circle>
    <circle class="fill-yellow" stroke-width="3" stroke-miterlimit="10" cx="333.261" cy="222.266" r="25.344"></circle>
    <path class="fill-blue" d="M 49.669 -9.998 C 51.03 -13.511 54.16 -16.03 57.882 -16.608 L 92.738 -22.023 C 96.459 -22.602 100.206 -21.149 102.568 -18.217 L 124.686 9.261 C 127.047 12.196 127.665 16.166 126.305 19.679 L 113.567 52.571 C 112.206 56.084 109.075 58.604 105.354 59.184 L 70.498 64.599 C 66.777 65.177 63.029 63.727 60.668 60.791 L 38.55 33.314 C 36.189 30.378 35.571 26.408 36.931 22.895 L 49.669 -9.998 Z"></path>
    <path class="fill-pink" d="M 1032.318 376.476 C 1033.264 374.034 1035.44 372.282 1038.028 371.88 L 1062.261 368.116 C 1064.848 367.713 1067.453 368.723 1069.095 370.762 L 1084.472 389.865 C 1086.114 391.906 1086.544 394.666 1085.598 397.108 L 1076.742 419.976 C 1075.796 422.418 1073.619 424.17 1071.032 424.574 L 1046.799 428.338 C 1044.212 428.74 1041.606 427.732 1039.965 425.691 L 1024.588 406.588 C 1022.946 404.547 1022.517 401.787 1023.462 399.344 L 1032.318 376.476 Z"></path>
    <path class="fill-purple" d="M 1396.93 665.688 C 1399.95 657.893 1406.894 652.305 1415.153 651.022 L 1492.489 639.008 C 1500.744 637.723 1509.057 640.947 1514.298 647.453 L 1563.372 708.418 C 1568.611 714.931 1569.981 723.739 1566.965 731.533 L 1538.703 804.512 C 1535.683 812.306 1528.736 817.897 1520.48 819.184 L 1443.144 831.199 C 1434.887 832.481 1426.573 829.264 1421.334 822.75 L 1372.26 761.786 C 1367.022 755.272 1365.65 746.463 1368.668 738.668 L 1396.93 665.688 Z"></path>
    <path class="fill-purple" d="M 264.129 775.914 C 265.075 773.472 267.251 771.72 269.839 771.318 L 294.072 767.554 C 296.659 767.151 299.264 768.161 300.906 770.2 L 316.283 789.303 C 317.925 791.344 318.355 794.104 317.409 796.546 L 308.553 819.414 C 307.607 821.856 305.43 823.608 302.843 824.012 L 278.61 827.776 C 276.023 828.178 273.417 827.17 271.776 825.129 L 256.399 806.026 C 254.757 803.985 254.328 801.225 255.273 798.782 L 264.129 775.914 Z"></path>
    <circle class="fill-cyan" stroke-width="3" stroke-miterlimit="10" cx="745.931" cy="783.228" r="25.344"></circle>
    <path class="fill-purple" d="M 929.895 57.225 C 930.389 55.951 931.524 55.036 932.875 54.826 L 945.523 52.862 C 946.873 52.652 948.232 53.179 949.089 54.243 L 957.115 64.213 C 957.972 65.278 958.196 66.719 957.702 67.993 L 953.08 79.928 C 952.587 81.203 951.45 82.117 950.1 82.328 L 937.453 84.293 C 936.103 84.502 934.742 83.976 933.886 82.911 L 925.86 72.941 C 925.004 71.876 924.78 70.435 925.273 69.16 L 929.895 57.225 Z"></path>
</svg>
        </figure>
      </div>
      <div class="container position-relative zindex-100">
        <div class="mb-5 px-3 text-center">
          <span class="badge badge-soft-success badge-pill badge-lg">
            Build tools
          </span>
          <h3 class=" mt-4">Built for awesomeness</h3>
          <div class="fluid-paragraph mt-3">
            <p class="lead lh-180">We use the latest technologies and tools in order to create a better code that not only works great, but it is easy easy to work with too.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="card px-3">
              <div class="card-body py-5">
                <div class="d-flex align-items-center">
                  <div class="icon bg-gradient-primary text-white rounded-circle icon-shape shadow-primary">
                    <i class="fab fa-html5"></i>
                  </div>
                  <div class="icon-text pl-4">
                    <h5 class="mb-0">Created with the latest technologies</h5>
                  </div>
                </div>
                <p class="mt-4 mb-0">We use the latest technologies and tools in order to create a better code that not only works great, but it is easy easy to work with too.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card px-3">
              <div class="card-body py-5">
                <div class="d-flex align-items-center">
                  <div class="icon bg-gradient-warning text-white rounded-circle icon-shape shadow-warning">
                    <i class="fab fa-node-js"></i>
                  </div>
                  <div class="icon-text pl-4">
                    <h5 class="mb-0">Built by developers for developers</h5>
                  </div>
                </div>
                <p class="mt-4 mb-0">You don't only need a theme, but also great tools in order to ease the process or building and customizing. And this is exactly what we offer you.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card px-3">
              <div class="card-body py-5">
                <div class="d-flex align-items-center">
                  <div class="icon bg-gradient-info text-white rounded-circle icon-shape shadow-info">
                    <i class="fas fa-thumbs-up"></i>
                  </div>
                  <div class="icon-text pl-4">
                    <h5 class="mb-0">Made for great first impressions</h5>
                  </div>
                </div>
                <p class="mt-4 mb-0">is lighter and faster than most of the themes out there which means you get more for less. Check out the components and examples pages.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features (v5) -->
    <section class="slice slice-xl has-floating-items bg-gradient-primary" id="sct-call-to-action"><a href="#sct-call-to-action" class="tongue tongue-up tongue-section-secondary" data-scroll-to="">
        <i class="fas fa-angle-up"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-12">
            <h1 class="text-white">Complete features at your hand</h1>
            <div class="row justify-content-center mt-4">
              <div class="col-lg-8">
                <p class="lead text-white">
                  Purpose is a great premium UI package including all the important and needed features so you can jumpstart the hard work and get right to the website creation fast and easy with more than 100 customized Bootstrap components and 15+ integrated plugins.
                </p>
                <div class="btn-container mt-5">
                  <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" class="btn btn-dark rounded-pill btn-icon hover-translate-y-n3 mb-4 mb-md-0">
                    <span class="btn-inner--icon">
                      <i class="fas fa-shopping-basket"></i>
                    </span>
                    <span class="btn-inner--text">Purchase now</span>
                  </a>
                  <a href="docs/index.html" class="btn btn-white rounded-pill btn-icon hover-translate-y-n3">
                    <span class="btn-inner--icon">
                      <i class="fas fa-book"></i>
                    </span>
                    <span class="btn-inner--text">Read the Docs</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container floating-items">
        <div class="icon-floating bg-white floating">
          <span></span>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="145px" height="113px" viewBox="0 0 145 113" version="1.1" class="injected-svg svg-inject">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Apps</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Apps" transform="translate(2.000000, 1.000000)">
            <path d="M31,0.5 L13,0.5 C6,0.5 0.4,6.2 0.4,13.1 L0.4,31.1 C0.4,38.1 6.1,43.7 13,43.7 L31,43.7 C38,43.7 43.6,38 43.6,31.1 L43.6,13.1 C43.6,6.1 37.9,0.5 31,0.5 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M31,5.1 L17.6,5.1 C10.6,5.1 5,10.8 5,17.7 L5,31.1 C5,38.1 10.7,43.7 17.6,43.7 L31,43.7 C38,43.7 43.6,38 43.6,31.1 L43.6,17.7 C43.6,10.8 37.9,5.1 31,5.1 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <path d="M31,0.5 L13,0.5 C6,0.5 0.4,6.2 0.4,13.1 L0.4,31.1 C0.4,38.1 6.1,43.7 13,43.7 L31,43.7 C38,43.7 43.6,38 43.6,31.1 L43.6,13.1 C43.6,6.1 37.9,0.5 31,0.5 Z" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M31,56.2 L13,56.2 C6,56.2 0.4,61.9 0.4,68.8 L0.4,86.8 C0.4,93.8 6.1,99.4 13,99.4 L31,99.4 C38,99.4 43.6,93.7 43.6,86.8 L43.6,68.8 C43.6,61.8 37.9,56.2 31,56.2 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M31,60.8 L17.6,60.8 C10.6,60.8 5,66.5 5,73.4 L5,86.8 C5,93.8 10.7,99.4 17.6,99.4 L31,99.4 C38,99.4 43.6,93.7 43.6,86.8 L43.6,73.4 C43.6,66.5 37.9,60.8 31,60.8 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <path d="M31,56.2 L13,56.2 C6,56.2 0.4,61.9 0.4,68.8 L0.4,86.8 C0.4,93.8 6.1,99.4 13,99.4 L31,99.4 C38,99.4 43.6,93.7 43.6,86.8 L43.6,68.8 C43.6,61.8 37.9,56.2 31,56.2 Z" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M86.7,0.5 L68.7,0.5 C61.7,0.5 56.1,6.2 56.1,13.1 L56.1,31.1 C56.1,38.1 61.8,43.7 68.7,43.7 L86.7,43.7 C93.7,43.7 99.3,38 99.3,31.1 L99.3,13.1 C99.3,6.1 93.6,0.5 86.7,0.5 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M86.7,0.5 L68.7,0.5 C61.7,0.5 56.1,6.2 56.1,13.1 L56.1,31.1 C56.1,38.1 61.8,43.7 68.7,43.7 L86.7,43.7 C93.7,43.7 99.3,38 99.3,31.1 L99.3,13.1 C99.3,6.1 93.6,0.5 86.7,0.5 Z" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M86.7,56.2 L68.7,56.2 C61.7,56.2 56.1,61.9 56.1,68.8 L56.1,86.8 C56.1,93.8 61.8,99.4 68.7,99.4 L86.7,99.4 C93.7,99.4 99.3,93.7 99.3,86.8 L99.3,68.8 C99.3,61.8 93.6,56.2 86.7,56.2 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M86.7,60.8 L73.3,60.8 C66.3,60.8 60.7,66.5 60.7,73.4 L60.7,86.8 C60.7,93.8 66.4,99.4 73.3,99.4 L86.7,99.4 C93.7,99.4 99.3,93.7 99.3,86.8 L99.3,73.4 C99.3,66.5 93.6,60.8 86.7,60.8 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <path d="M86.7,56.2 L68.7,56.2 C61.7,56.2 56.1,61.9 56.1,68.8 L56.1,86.8 C56.1,93.8 61.8,99.4 68.7,99.4 L86.7,99.4 C93.7,99.4 99.3,93.7 99.3,86.8 L99.3,68.8 C99.3,61.8 93.6,56.2 86.7,56.2 Z" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <g id="Group" transform="translate(68.000000, 18.000000)">
                <path d="M73,36.8 C73,33.5 70.3,30.8 67,30.8 C64,30.8 61.6,33 61.1,35.8 L58.4,35.8 L58.4,31.2 C58.4,27.9 55.7,25.2 52.4,25.2 C49.1,25.2 46.4,27.9 46.4,31.2 L46.4,35.7 L43.9,35.7 L43.9,26.4 C43.9,22.8 41,19.9 37.4,19.9 C33.8,19.9 30.9,22.8 30.9,26.4 L30.9,35.6 L28.7,35.6 L28.7,8.2 C28.7,4.6 25.8,1.7 22.2,1.7 C18.6,1.7 15.7,4.6 15.7,8.2 L15.7,47.7 L15.7,50.9 L15.7,64.5 L13.4,64.5 L13.4,54.9 C13.4,47.8 7.6,42 0.5,42 L0.5,65.7 C0.5,67.1 0.9,68.3 1.7,69.4 C1.7,69.4 1.7,69.5 1.7,69.5 C4.1,73.3 17.5,84.7 23.6,89.9 C25.6,91.6 28.2,92.5 30.8,92.5 L57.1,92.5 C65.8,92.5 72.9,85.4 72.9,76.7 L72.9,36.8 L73,36.8 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M73,36 L73,75.8 C73,84.5 65.9,91.6 57.2,91.6 L31,91.6 C28.4,91.6 25.8,90.7 23.8,89 C17.6,83.8 4.3,72.3 1.9,68.6 C1.9,68.6 1.9,68.5 1.9,68.5 C1.2,67.4 0.7,66.2 0.7,64.8 L0.7,41 C7.8,41 13.6,46.8 13.6,53.9 L13.6,63.5 L15.9,63.5 L15.9,7.2 C15.9,3.6 18.8,0.7 22.4,0.7 C26,0.7 28.9,3.6 28.9,7.2 L28.9,34.6 L31.1,34.6 L31.1,25.4 C31.1,21.8 34,18.9 37.6,18.9 C41.2,18.9 44.1,21.8 44.1,25.4 L44.1,34.7 L46.6,34.7 L46.6,30.2 C46.6,26.9 49.3,24.2 52.6,24.2 C55.9,24.2 58.6,26.9 58.6,30.2 L58.6,34.8 L61.3,34.8 C61.8,32 64.2,29.8 67.2,29.8 C70.3,30 73,32.7 73,36 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
                <path d="M73,40.6 L73,75.7 C73,84.4 65.9,91.5 57.2,91.5 L31,91.5 C28.4,91.5 25.8,90.6 23.8,88.9 C17.6,83.7 4.3,72.2 1.9,68.5 C1.9,68.5 1.9,68.4 1.9,68.4 C1.2,67.3 0.7,66.1 0.7,64.7 L0.7,45.6 C7.8,45.6 13.6,51.4 13.6,58.5 L13.6,68.1 L15.9,68.1 L15.9,11.8 C15.9,8.2 18.8,5.3 22.4,5.3 C26,5.3 28.9,8.2 28.9,11.8 L28.9,39.2 L31.1,39.2 L31.1,30 C31.1,26.4 34,23.5 37.6,23.5 C41.2,23.5 44.1,26.4 44.1,30 L44.1,39.3 L46.6,39.3 L46.6,34.7 C46.7,31.4 49.3,28.8 52.6,28.8 C55.9,28.8 58.6,31.5 58.6,34.8 C58.6,34.8 58.6,34.8 58.6,34.8 L58.6,39.4 L61.3,39.4 C61.8,36.6 64.2,34.4 67.2,34.4 C70.3,34.6 73,37.3 73,40.6 Z" id="Shape" class="fill-primary-100" fill-rule="nonzero"></path>
                <path d="M73,36.8 C73,33.5 70.3,30.8 67,30.8 C64,30.8 61.6,33 61.1,35.8 L58.4,35.8 L58.4,31.2 C58.4,27.9 55.7,25.2 52.4,25.2 C49.1,25.2 46.4,27.9 46.4,31.2 L46.4,35.7 L43.9,35.7 L43.9,26.4 C43.9,22.8 41,19.9 37.4,19.9 C33.8,19.9 30.9,22.8 30.9,26.4 L30.9,35.6 L28.7,35.6 L28.7,8.2 C28.7,4.6 25.8,1.7 22.2,1.7 C18.6,1.7 15.7,4.6 15.7,8.2 L15.7,47.7 L15.7,50.9 L15.7,64.5 L13.4,64.5 L13.4,54.9 C13.4,47.8 7.6,42 0.5,42 L0.5,65.7 C0.5,67.1 0.9,68.3 1.7,69.4 C1.7,69.4 1.7,69.5 1.7,69.5 C4.1,73.3 17.5,84.7 23.6,89.9 C25.6,91.6 28.2,92.5 30.8,92.5 L57.1,92.5 C65.8,92.5 72.9,85.4 72.9,76.7 L72.9,36.8 L73,36.8 Z" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
        </g>
    </g>
</svg>
        </div>
        <div class="icon-floating icon-lg bg-white floating">
          <span></span>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150px" height="130px" viewBox="0 0 150 130" version="1.1" class="injected-svg svg-inject">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Apple</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Apple" transform="translate(2.000000, 1.000000)">
            <g id="Group" transform="translate(0.000000, 127.000000)" class="stroke-primary-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <path d="M1.5,0.1 L0.1,0.1" id="Shape"></path>
                <path d="M41.8,0.1 L7.2,0.1" id="Shape"></path>
                <path d="M49.2,0.1 L47.9,0.1" id="Shape"></path>
                <path d="M139.4,0.1 L56.8,0.1" id="Shape"></path>
                <path d="M146.1,0.1 L143.9,0.1" id="Shape"></path>
            </g>
            <path d="M61.9,36.7 C56.9,34.8 51.4,34.2 45.6,35.1 C31.3,37.1 19.8,49.6 18.9,64.1 C18.2,76.1 21.2,87.4 25.1,98.5 C28.1,107 32.4,114.7 39.5,120.4 C50.1,128.9 63.6,130 73.7,120.6 C79.8,126.3 86.8,128.4 94.8,126.7 C102.7,125 108.9,120.5 113.9,114.2 C119,107.7 122,100.2 124.3,92.4 C127.3,82.4 129.5,72.2 128,61.6 C125.5,43.9 107.7,31.4 90.2,35.5 C85.6,36.6 81.3,38.8 77.2,40.4" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M123.9,84.3 C121.8,95.3 117.4,106.5 112.4,112.8 C103,124.6 84.6,131.2 73.5,120.9 C61.2,132.3 41.6,120.5 34.3,99.6 C34.2,99.4 34.2,99.2 34.1,99 C30.7,89.2 28,79.2 28.7,68.7 C29.8,50.9 48.4,37.7 66.6,44.6 L80.1,47.8 C83.8,46.4 87.5,44.4 91.6,43.5 C107,39.9 122.7,50.9 124.9,66.5 C125.5,71.6 125.1,77.9 123.9,84.3 Z" id="Shape" fill="#BAD8FF" fill-rule="nonzero"></path>
            <path d="M123.9,84.3 C121.5,90.7 118.5,96.5 115.3,100.5 C104.7,113.9 87.6,118.6 75.1,106.9 C63.8,117.3 46.1,115.6 34.2,99.6 C34.1,99.4 34.1,99.2 34,99 C30.6,89.2 27.9,79.2 28.6,68.7 C29.7,50.9 48.3,37.7 66.5,44.6 L80,47.8 C83.7,46.4 87.4,44.4 91.5,43.5 C106.9,39.9 122.6,50.9 124.8,66.5 C125.5,71.6 125.1,77.9 123.9,84.3 Z" id="Shape" class="fill-primary-100" fill-rule="nonzero"></path>
            <path d="M27.5,44.5 C22.5,49.7 19.3,56.6 18.8,64 C18.1,76 21.1,87.3 25,98.4 C28,106.9 32.3,114.6 39.4,120.3 C50,128.8 63.5,129.9 73.6,120.5 C79.7,126.2 86.7,128.3 94.7,126.6 C102.6,124.9 108.8,120.4 113.8,114.1 C118.9,107.6 121.9,100.1 124.2,92.3 C127.2,82.3 129.4,72.1 127.9,61.5 C125.4,43.8 107.6,31.3 90.1,35.4 C85.5,36.5 81.2,38.7 77.1,40.3 C77.1,40.3 80.9,18.9 61.5,14.6" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M33.4,39.6 C33.4,39.6 33.3,39.7 33.3,39.7" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M61.9,36.7 C56.9,34.8 51.4,34.2 45.6,35.1 C43.4,35.4 41.2,36 39.2,36.8" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M84.6,4.8 C82.7,6.3 80.8,8.1 78.9,10.5 C76.3,13.8 74.2,17.3 72.7,20.9" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M73.7,18.8 C76,19.7 78.3,20.5 80.7,21.2 C87.9,23.3 93.9,23.8 100.2,19.1 C106.4,14.5 109.4,11.6 112,12.1 C109.5,6.4 102.2,-0.7 93.1,0.9" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M43.5,98.5 C46.3,103.3 49.8,107.2 54.1,110" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M39.8,90.8 C39.9,91.1 40,91.3 40.1,91.6" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
        </g>
    </g>
</svg>
        </div>
        <div class="icon-floating icon-sm bg-white floating">
          <span></span>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="148px" height="148px" viewBox="0 0 148 148" version="1.1" class="injected-svg svg-inject">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Ballance</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Ballance" transform="translate(1.000000, 0.000000)">
            <path d="M135.6,144.7 L10.5,144.7 C5.2,144.7 0.9,140.4 0.9,135.1 L0.9,10 C0.9,4.7 5.2,0.4 10.5,0.4 L135.6,0.4 C140.9,0.4 145.2,4.7 145.2,10 L145.2,135.1 C145.2,140.4 140.9,144.7 135.6,144.7 Z" id="Shape" fill="#FAFAFA" fill-rule="nonzero"></path>
            <path d="M145.2,18.6 L145.2,135.5 C145.2,140.5 141.1,144.6 136.1,144.6 L14.8,144.6 C9.8,144.6 5.7,140.5 5.7,135.5 L5.7,18.6 C5.7,13.6 9.8,9.5 14.8,9.5 L136,9.5 C141.1,9.5 145.2,13.6 145.2,18.6 Z" id="Shape" class="fill-primary-200" fill-rule="nonzero"></path>
            <path d="M145.2,18.6 L145.2,124.7 C145.2,129.7 141.1,133.8 136.1,133.8 L14.8,133.8 C9.8,133.8 5.7,129.7 5.7,124.7 L5.7,18.6 C5.7,13.6 9.8,9.5 14.8,9.5 L136,9.5 C141.1,9.5 145.2,13.6 145.2,18.6 Z" id="Shape" class="fill-primary-100" fill-rule="nonzero"></path>
            <path d="M32,1.9 L33.3,1.9" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M104.1,146.1 L10.5,146.1 C5.2,146.1 0.9,141.8 0.9,136.5 L0.9,11.4 C0.9,6.1 5.2,1.8 10.5,1.8 L21.9,1.8" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M55.1,1.9 L135.6,1.9 C140.9,1.9 145.2,6.2 145.2,11.5 L145.2,136.6 C145.2,141.9 140.9,146.2 135.6,146.2 L122.6,146.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M24.6,27.6 L121.7,27.6" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M24.6,58.4 L121.7,58.4" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M24.6,89.3 L121.7,89.3" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M24.6,120.1 L121.7,120.1" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M100.6,32.6 L97.4,32.6 C95.8,32.6 94.5,31.3 94.5,29.7 L94.5,24.8 C94.5,23.2 95.8,21.9 97.4,21.9 L100.6,21.9 C102.2,21.9 103.5,23.2 103.5,24.8 L103.5,29.7 C103.6,31.3 102.3,32.6 100.6,32.6 Z" id="Shape" stroke-width="3" class="stroke-primary fill-primary-500" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M62.8,32.6 L59.6,32.6 C58,32.6 56.7,31.3 56.7,29.7 L56.7,24.8 C56.7,23.2 58,21.9 59.6,21.9 L62.8,21.9 C64.4,21.9 65.7,23.2 65.7,24.8 L65.7,29.7 C65.7,31.3 64.4,32.6 62.8,32.6 Z" id="Shape" stroke-width="3" class="stroke-primary fill-primary-500" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M82.2,32.6 L79,32.6 C77.4,32.6 76.1,31.3 76.1,29.7 L76.1,24.8 C76.1,23.2 77.4,21.9 79,21.9 L82.2,21.9 C83.8,21.9 85.1,23.2 85.1,24.8 L85.1,29.7 C85.1,31.3 83.8,32.6 82.2,32.6 Z" id="Shape" stroke-width="3" class="stroke-primary fill-primary-500" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M82.1,63.8 L78.9,63.8 C77.3,63.8 76,62.5 76,60.9 L76,56 C76,54.4 77.3,53.1 78.9,53.1 L82.1,53.1 C83.7,53.1 85,54.4 85,56 L85,60.9 C85,62.5 83.7,63.8 82.1,63.8 Z" id="Shape" stroke-width="3" class="stroke-primary fill-primary-500" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M43,63.8 L39.8,63.8 C38.2,63.8 36.9,62.5 36.9,60.9 L36.9,56 C36.9,54.4 38.2,53.1 39.8,53.1 L43,53.1 C44.6,53.1 45.9,54.4 45.9,56 L45.9,60.9 C45.9,62.5 44.6,63.8 43,63.8 Z" id="Shape" stroke-width="3" class="stroke-primary fill-primary-500" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M36.7,94.7 L33.5,94.7 C31.9,94.7 30.6,93.4 30.6,91.8 L30.6,86.9 C30.6,85.3 31.9,84 33.5,84 L36.7,84 C38.3,84 39.6,85.3 39.6,86.9 L39.6,91.8 C39.6,93.3 38.3,94.7 36.7,94.7 Z" id="Shape" stroke-width="3" class="stroke-primary fill-primary-500" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M75,94.7 L71.8,94.7 C70.2,94.7 68.9,93.4 68.9,91.8 L68.9,86.9 C68.9,85.3 70.2,84 71.8,84 L75,84 C76.6,84 77.9,85.3 77.9,86.9 L77.9,91.8 C77.9,93.3 76.6,94.7 75,94.7 Z" id="Shape" stroke-width="3" class="stroke-primary fill-primary-500" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M117.9,94.7 L114.7,94.7 C113.1,94.7 111.8,93.4 111.8,91.8 L111.8,86.9 C111.8,85.3 113.1,84 114.7,84 L117.9,84 C119.5,84 120.8,85.3 120.8,86.9 L120.8,91.8 C120.8,93.3 119.5,94.7 117.9,94.7 Z" id="Shape" stroke-width="3" class="stroke-primary fill-primary-500" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M65.1,125.5 L61.9,125.5 C60.3,125.5 59,124.2 59,122.6 L59,117.7 C59,116.1 60.3,114.8 61.9,114.8 L65.1,114.8 C66.7,114.8 68,116.1 68,117.7 L68,122.6 C68,124.2 66.7,125.5 65.1,125.5 Z" id="Shape" stroke-width="3" class="stroke-primary fill-primary-500" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round"></path>
        </g>
    </g>
</svg>
        </div>
        <div class="icon-floating icon-lg bg-white floating">
          <span></span>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="149px" height="110px" viewBox="0 0 149 110" version="1.1" class="injected-svg svg-inject">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Book</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Book" transform="translate(2.000000, 2.000000)">
            <path d="M145.4,8.2 L145.4,102.4 C145.4,104.1 144,105.5 142.3,105.5 L3.6,105.5 C1.9,105.5 0.5,104.1 0.5,102.4 L0.5,8.2 C0.5,6.5 1.9,5.1 3.6,5.1 L142.3,5.1 C144,5.1 145.4,6.5 145.4,8.2 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <g id="Group" transform="translate(3.000000, 7.000000)" class="fill-primary-500" fill-rule="nonzero">
                <path d="M69.6,16.8 L69.6,98.6 L64.8,98.6 C61.6,95.5 57,93.5 51.9,93.5 L5.4,93.5 C2.9,93.5 0.9,91.7 0.9,89.4 L0.9,4.7 C0.9,3.3 1.6,2.1 2.8,1.4 C3.5,0.9 4.4,0.6 5.4,0.6 L51.9,0.6 C61.7,0.6 69.6,7.8 69.6,16.8 Z" id="Shape"></path>
                <path d="M139.2,4.7 L139.2,89.4 C139.2,91.7 137.2,93.5 134.7,93.5 L88.2,93.5 C83.1,93.5 78.5,95.4 75.3,98.6 L70.5,98.6 L70.5,16.8 C70.5,7.9 78.4,0.6 88.2,0.6 L134.7,0.6 C135.7,0.6 136.5,0.9 137.3,1.3 C138.4,2.1 139.2,3.3 139.2,4.7 Z" id="Shape"></path>
            </g>
            <path d="M46.1,105.5 L13.2,105.5" id="Shape" class="stroke-primary" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M5.9,105.5 L3.6,105.5 C1.9,105.5 0.5,104.1 0.5,102.4 L0.5,8.2 C0.5,6.5 1.9,5.1 3.6,5.1 L142.3,5.1 C144,5.1 145.4,6.5 145.4,8.2 L145.4,102.4 C145.4,104.1 144,105.5 142.3,105.5 L58,105.5" id="Shape" class="stroke-primary" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M72.6,16.7 L72.6,105.5 L72.1,105.5 C70.2,98.5 63.5,93.4 55.4,93.4 L10.1,93.4 C7.7,93.4 5.7,91.6 5.7,89.3 L5.7,4.6 C5.7,2.3 7.7,0.5 10.1,0.5 L55.4,0.5 C60,0.5 64.3,2.2 67.4,5 C70.6,8 72.6,12.1 72.6,16.7 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M140.3,4.6 L140.3,89.3 C140.3,91.6 138.3,93.4 135.9,93.4 L90.7,93.4 C82.7,93.4 75.9,98.6 74,105.5 L73.5,105.5 L73.5,16.7 C73.5,12.1 75.5,8 78.8,5.1 C81.9,2.3 86.1,0.6 90.8,0.6 L136,0.6 C138.3,0.5 140.3,2.4 140.3,4.6 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M30.2,0.5 L55.4,0.5 C60,0.5 64.3,2.2 67.4,5 C70.7,7.9 72.7,12.1 72.7,16.6 L72.7,105.4 L72.2,105.4 C70.3,98.4 63.6,93.3 55.5,93.3 L10.2,93.3 C7.8,93.3 5.8,91.5 5.8,89.2 L5.8,4.5 C5.8,2.2 7.8,0.4 10.2,0.4 L12.8,0.4" id="Shape" class="stroke-primary" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M20.8,0.5 L22.4,0.5" id="Shape" class="stroke-primary" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M99.2,0.5 L135.9,0.5 C138.3,0.5 140.3,2.3 140.3,4.6 L140.3,89.3 C140.3,91.6 138.3,93.4 135.9,93.4 L90.7,93.4 C82.7,93.4 75.9,98.6 74,105.5 L73.5,105.5 L73.5,16.7 C73.5,12.1 75.5,8 78.8,5.1 C81.9,2.3 86.1,0.6 90.8,0.6 L92.7,0.6" id="Shape" class="stroke-primary" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"></path>
            <g id="Group" transform="translate(18.000000, 19.000000)" class="stroke-primary-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.2">
                <path d="M9.7,58 L24.1,58" id="Shape"></path>
                <path d="M0.1,58 L2.7,58" id="Shape"></path>
                <path d="M27.3,46.6 L41.6,46.6" id="Shape"></path>
                <path d="M0.4,46.6 L21.3,46.6" id="Shape"></path>
                <path d="M0.7,35.1 L31.2,35.1" id="Shape"></path>
                <path d="M0.7,12.4 L31.2,12.4" id="Shape"></path>
                <path d="M22.5,23.7 L42.2,23.7" id="Shape"></path>
                <path d="M1,23.7 L16.2,23.7" id="Shape"></path>
                <path d="M32.8,0.2 L42.2,0.2" id="Shape"></path>
                <path d="M1,0.2 L25.3,0.2" id="Shape"></path>
            </g>
            <g id="Group" transform="translate(87.000000, 18.000000)" class="stroke-primary-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.2">
                <path d="M9.6,44.7 L23.4,44.7" id="Shape"></path>
                <path d="M0.5,44.7 L2.9,44.7" id="Shape"></path>
                <path d="M26.4,33.4 L40.1,33.4" id="Shape"></path>
                <path d="M0.7,33.4 L20.7,33.4" id="Shape"></path>
                <path d="M1,22.1 L30.2,22.1" id="Shape"></path>
                <path d="M21.8,10.9 L40.6,10.9" id="Shape"></path>
                <path d="M1.3,10.9 L15.8,10.9" id="Shape"></path>
                <path d="M31.6,0.1 L40.6,0.1" id="Shape"></path>
                <path d="M1.3,0.1 L24.5,0.1" id="Shape"></path>
            </g>
            <path d="M92.2,99.9 L89.8,97.2 L86.9,100 C86.5,100.3 85.9,100.1 85.9,99.7 L85.9,1.7 C85.9,1 86.5,0.4 87.2,0.4 L93.3,0.4 L93.3,99.5 C93.2,100.1 92.5,100.3 92.2,99.9 Z" id="Shape" stroke-width="3.2" class="stroke-primary fill-primary-100" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round"></path>
        </g>
    </g>
</svg>
        </div>
        <div class="icon-floating bg-white floating">
          <span></span>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="131px" height="149px" viewBox="0 0 131 149" version="1.1" class="injected-svg svg-inject">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Chat</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Chat" transform="translate(2.000000, 1.000000)">
            <path d="M126.6,80.4 C126.6,80.7 126.6,81.1 126.6,81.5 C126.5,96.2 126,116.3 126,146 C126,146 126,146 126,146 L96.1,127.8 L94.1,126.6 C89.6,123.8 84.1,123.1 78.9,124.4 C73.9,125.7 68.6,126.4 63.2,126.4 C58.6,126.4 54,125.9 49.7,125 C21.6,118.9 0.4,93.8 0.3,63.9 C0.2,29.1 28.3,0.8 63.1,0.8 C88.1,0.8 111.2,16.1 121,39.1 C125.8,50.2 126.7,60.2 126.6,80.4 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M126.6,80.4 C126.6,80.7 126.6,81.1 126.6,81.5 L126.6,83.4 C126.6,97.3 126,116.5 126,146 L96.6,128.1 C96.4,128 96.3,127.9 96.1,127.8 L94.1,126.6 C89.6,123.8 84.1,123.1 78.9,124.4 C73.9,125.7 68.6,126.4 63.2,126.4 C58.6,126.4 54,125.9 49.7,125 C34.1,119.8 21.3,108.2 14.7,93.2 C11.5,86.1 9.8,78.2 9.7,70 C9.6,37.8 35.6,11.7 67.8,11.7 C90.9,11.7 112.3,25.9 121.3,47.2 C125.5,56.5 126.5,64.9 126.6,80.4 Z" id="Shape" fill="#D0E5FE" fill-rule="nonzero"></path>
            <path d="M126.6,80.4 C126.6,80.7 126.6,81.1 126.6,81.5 L126.6,83.4 C122.7,98 120.2,112.9 120.2,127.6 C120.2,127.6 96.5,113.1 84.5,105.9 C70.2,97.2 62.5,110.2 34.8,104.1 C27.5,101.7 20.7,98 14.7,93.2 C11.5,86.1 9.8,78.2 9.7,70 C9.6,37.8 35.6,11.7 67.8,11.7 C90.9,11.7 112.3,25.9 121.3,47.2 C125.5,56.5 126.5,64.9 126.6,80.4 Z" id="Shape" class="fill-primary-100" fill-rule="nonzero"></path>
            <path d="M126.1,130.9 C126.1,135.6 126.1,140.6 126.1,146 C126.1,146 126.1,146 126.1,146 L96.2,127.8 L94.2,126.6 C89.7,123.8 84.2,123.1 79,124.4 C74,125.7 68.7,126.4 63.3,126.4 C58.7,126.4 54.1,125.9 49.8,125 C21.7,118.9 0.5,93.8 0.4,63.9 C0.4,51.5 3.9,40 10,30.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M41.8,4.5 C48.5,2.1 55.7,0.8 63.2,0.8 C88.2,0.8 111.3,16.1 121.1,39.1 C125.8,50.2 126.7,60.2 126.7,80.4 C126.7,80.7 126.7,81.1 126.7,81.5 C126.7,90.4 126.4,101.2 126.3,114.8" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M29,10.9 C29.5,10.6 30,10.2 30.5,9.9" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <circle id="Oval" class="fill-neutral" fill-rule="nonzero" cx="32.8" cy="64.8" r="9.3"></circle>
            <circle id="Oval" class="fill-neutral" fill-rule="nonzero" cx="63.3" cy="64.8" r="9.3"></circle>
            <circle id="Oval" class="fill-neutral" fill-rule="nonzero" cx="93.8" cy="64.8" r="9.3"></circle>
            <path d="M32.8,74.1 C27.7,74.1 23.5,69.9 23.5,64.8 C23.5,63.6 23.7,62.5 24.1,61.5" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M29.7,56 C30.7,55.7 31.7,55.5 32.8,55.5 C37.9,55.5 42.1,59.7 42.1,64.8 C42.1,67.3 41.1,69.5 39.6,71.2" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M72.6,64.3 C72.6,64.5 72.6,64.6 72.6,64.8 C72.6,69.9 68.4,74.1 63.3,74.1 C58.2,74.1 54,69.9 54,64.8 C54,59.7 58.2,55.5 63.3,55.5 C64.2,55.5 65,55.6 65.8,55.8" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M87.1,58.4 C88.8,56.6 91.2,55.5 93.8,55.5 C98.9,55.5 103.1,59.7 103.1,64.8 C103.1,69.9 98.9,74.1 93.8,74.1 C88.7,74.1 84.5,69.9 84.5,64.8 C84.5,62.3 85.5,60.1 87.1,58.4" id="Shape" class="stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
        </g>
    </g>
</svg>
        </div>
        <div class="icon-floating icon-sm bg-white floating">
          <span></span>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="141px" height="149px" viewBox="0 0 141 149" version="1.1" class="injected-svg svg-inject">
    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
    <title>Coffee</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Coffee" transform="translate(1.000000, 1.000000)">
            <g id="Group" transform="translate(0.000000, 146.000000)" class="stroke-primary-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2656">
                <path d="M1.3,0.5 L0.4,0.5" id="Shape"></path>
                <path d="M25.7,0.5 L4.7,0.5" id="Shape"></path>
                <path d="M30.2,0.5 L29.4,0.5" id="Shape"></path>
                <path d="M99.7,0.5 L34.8,0.5" id="Shape"></path>
                <path d="M129.9,0.5 L103.3,0.5" id="Shape"></path>
                <path d="M134.7,0.5 L133.3,0.5" id="Shape"></path>
                <path d="M138.6,0.5 L138.4,0.5" id="Shape"></path>
            </g>
            <path d="M101,68.6 L97.9,68.6 L95.7,63.7 C94.9,61.9 93.1,60.7 91.1,60.7 L77.4,60.7 L44,60.7 C42,60.7 40.2,61.9 39.4,63.7 L37.2,68.6 L34.1,68.6 C32.9,68.6 31.9,69.6 31.9,70.8 L31.9,76.5 C31.9,77.7 32.9,78.7 34.1,78.7 L37,78.7 L39.3,97.6 L36,97.6 L40,129.9 L43.3,129.9 L44.8,141.9 C45.1,144.3 47.1,146.1 49.5,146.1 L69.7,146.1 L85.4,146.1 C87.8,146.1 89.8,144.3 90.1,141.9 L91.6,129.9 L94.9,129.9 L98.9,97.6 L95.6,97.6 L97.9,78.7 L100.8,78.7 C102,78.7 103,77.7 103,76.5 L103,70.8 C103.3,69.6 102.3,68.6 101,68.6 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M101,68.6 L97.9,68.6 L95.7,63.7 C94.9,61.9 93.1,60.7 91.1,60.7 L77.4,60.7 L44,60.7 C42,60.7 40.2,61.9 39.4,63.7 L37.2,68.6 L34.1,68.6 C32.9,68.6 31.9,69.6 31.9,70.8 L31.9,76.5 C31.9,77.7 32.9,78.7 34.1,78.7 L37,78.7 L39.3,97.6 L36,97.6 L40,129.9 L43.3,129.9 L44.8,141.9 C45.1,144.3 47.1,146.1 49.5,146.1 L69.7,146.1 L85.4,146.1 C87.8,146.1 89.8,144.3 90.1,141.9 L91.6,129.9 L94.9,129.9 L98.9,97.6 L95.6,97.6 L97.9,78.7 L100.8,78.7 C102,78.7 103,77.7 103,76.5 L103,70.8 C103.3,69.6 102.3,68.6 101,68.6 Z" id="Shape" class="fill-primary-100" fill-rule="nonzero"></path>
            <path d="M98.2,69 L37.3,69 L39.7,63.7 C40.5,61.9 42.3,60.7 44.3,60.7 L91.3,60.7 C93.3,60.7 95.1,61.9 95.9,63.7 L98.2,69 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M98.2,69 L40.2,69 L42.5,65.7 C43.3,64.6 45,63.9 46.9,63.9 L91.7,63.9 C93.6,63.9 95.3,64.6 96.1,65.7 L98.2,69 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <path d="M98.2,69 L37.3,69 L39.7,63.7 C40.5,61.9 42.3,60.7 44.3,60.7 L91.3,60.7 C93.3,60.7 95.1,61.9 95.9,63.7 L98.2,69 Z" id="Shape" class="stroke-primary" stroke-width="2.2656" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M98.2,69 L77.6,69 L79.3,63.9 L91.6,63.9 C93.5,63.9 95.2,64.6 96,65.7 L98.2,69 Z" id="Shape" class="fill-primary-500" fill-rule="nonzero"></path>
            <path d="M98.2,78.3 L90.4,142 C90.1,144.4 88.1,146.2 85.7,146.2 L70,146.2 L79.7,78.3 L98.2,78.3 Z" id="Shape" class="fill-primary-200" fill-rule="nonzero"></path>
            <path d="M98.2,78.3 L90.4,142 C90.1,144.4 88.1,146.2 85.7,146.2 L49.8,146.2 C47.4,146.2 45.4,144.4 45.1,142 L37.3,78.3 L98.2,78.3 Z" id="Shape" class="stroke-primary" stroke-width="2.2656" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M98.8,100.2 L95.4,128.1 C95.3,129.2 94.3,130 93.2,130 L42.2,130 C41.1,130 40.1,129.2 40,128.1 L36.6,100.2 C36.4,98.9 37.5,97.7 38.8,97.7 L96.6,97.7 C98,97.7 99,98.8 98.8,100.2 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M98.8,100.2 L95.4,128.1 C95.3,129.2 94.3,130 93.2,130 L42.2,130 C41.1,130 40.1,129.2 40,128.1 L36.6,100.2 C36.4,98.9 37.5,97.7 38.8,97.7 L96.6,97.7 C98,97.7 99,98.8 98.8,100.2 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <polygon id="Shape" class="fill-primary-100" fill-rule="nonzero" points="99.1 97.7 95.2 130 80.9 130 86.3 97.7"></polygon>
            <path d="M98.8,100.2 L95.4,128.1 C95.3,129.2 94.3,130 93.2,130 L42.2,130 C41.1,130 40.1,129.2 40,128.1 L36.6,100.2 C36.4,98.9 37.5,97.7 38.8,97.7 L96.6,97.7 C98,97.7 99,98.8 98.8,100.2 Z" id="Shape" class="stroke-primary" stroke-width="2.2656" stroke-linecap="round" stroke-linejoin="round"></path>
            <ellipse id="Oval" stroke-width="2.2656" class="stroke-primary fill-primary-500" fill-rule="nonzero" stroke-linecap="round" stroke-linejoin="round" cx="68.3" cy="113.8" rx="7.8" ry="10"></ellipse>
            <path d="M67.8,103.8 C65.2,110.7 72.1,114.8 69.8,123.7" id="Shape" class="stroke-primary" stroke-width="2.2656" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M101.5,78.7 L34,78.7 C33,78.7 32.2,77.9 32.2,76.9 L32.2,70.3 C32.2,69.3 33,68.5 34,68.5 L101.5,68.5 C102.5,68.5 103.3,69.3 103.3,70.3 L103.3,76.9 C103.3,77.9 102.5,78.7 101.5,78.7 Z" id="Shape" class="fill-neutral" fill-rule="nonzero"></path>
            <path d="M103.3,74.5 L103.3,76.5 C103.3,77.2 103,77.9 102.4,78.3 C102,78.6 101.6,78.8 101,78.8 L37.7,78.8 C36.5,78.8 35.5,77.8 35.5,76.6 L35.5,74.6 C35.5,73.4 36.5,72.4 37.7,72.4 L101,72.4 C102.3,72.3 103.3,73.3 103.3,74.5 Z" id="Shape" class="fill-primary-300" fill-rule="nonzero"></path>
            <path d="M103.3,74.5 L103.3,76.5 C103.3,77.2 103,77.9 102.4,78.3 L74.8,78.3 L76.8,72.3 L101,72.3 C102.3,72.3 103.3,73.3 103.3,74.5 Z" id="Shape" class="fill-primary-500" fill-rule="nonzero"></path>
            <path d="M101.5,78.7 L34,78.7 C33,78.7 32.2,77.9 32.2,76.9 L32.2,70.3 C32.2,69.3 33,68.5 34,68.5 L101.5,68.5 C102.5,68.5 103.3,69.3 103.3,70.3 L103.3,76.9 C103.3,77.9 102.5,78.7 101.5,78.7 Z" id="Shape" class="stroke-primary" stroke-width="2.2656" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M88.1,0.9 C81.3,6.9 78.6,17.2 81.5,25.8 C83.3,31 86.8,35.5 88.6,40.7 C90.3,45.9 89.5,52.8 84.5,55.2" id="Shape" class="stroke-primary-300" stroke-width="2.2656" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M73.8,19.8 C73.6,22.2 73.9,24.6 74.7,26.9 C76.1,31.1 79,34.7 80.4,38.9 C81.1,41 81.3,43.5 80.8,45.7" id="Shape" class="stroke-primary-300" stroke-width="2.2656" stroke-linecap="round" stroke-linejoin="round"></path>
        </g>
    </g>
</svg>
        </div>
      </div>
    </section>

    <!-- Features (v7) -->
    <section class="slice slice-lg">
      <div class="container">
        <div class="mb-5 text-center">
          <h3 class=" mt-4">Really useful features</h3>
          <div class="fluid-paragraph mt-3">
            <p class="lead lh-180">You get all Bootstrap components fully customized. Besides, you receive another numerous plugins out of the box and ready to use.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="mb-4">
              <div class="py-5">
                <div class="icon text-primary">
                  <i class="fab fa-twitter"></i>
                </div>
              </div>
              <h5 class="">Latest Bootstrap</h5>
              <p class=" mt-2 mb-0">A responsive and mobile-first theme built with the world's most popular component library.</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="mb-4">
              <div class="py-5">
                <div class="icon text-primary">
                  <i class="fab fa-sass"></i>
                </div>
              </div>
              <h5 class="">Built with Sass</h5>
              <p class=" mt-2 mb-0">Change one variable and the theme adapts. Colors, fonts, sizes ... you name it.</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="mb-4">
              <div class="py-5">
                <div class="icon text-primary">
                  <i class="fas fa-layer-group"></i>
                </div>
              </div>
              <h5 class="">700+ Components</h5>
              <p class=" mt-2 mb-0">Nicely customized components that can be reused anytime and anywhere in your project.</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="mb-4">
              <div class="py-5">
                <div class="icon text-primary">
                  <i class="fas fa-puzzle-piece"></i>
                </div>
              </div>
              <h5 class="">Everything is modular</h5>
              <p class=" mt-2 mb-0">Nicely customized components that can be reused anytime and anywhere in your project.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="mb-4">
              <div class="py-5">
                <div class="icon text-primary">
                  <i class="fas fa-tint"></i>
                </div>
              </div>
              <h5 class="">Extended color palette</h5>
              <p class=" mt-2 mb-0">A beautiful color palette that can be easily modified with our nicely coded Sass files.</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="mb-4">
              <div class="py-5">
                <div class="icon text-primary">
                  <i class="fas fa-code"></i>
                </div>
              </div>
              <h5 class="">15+ integrated plugins</h5>
              <p class=" mt-2 mb-0">More functionality with the ready to use plugins we have integrated in this theme for you.</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="mb-4">
              <div class="py-5">
                <div class="icon text-primary">
                  <i class="fas fa-font"></i>
                </div>
              </div>
              <h5 class="">1500 vector icons</h5>
              <p class=" mt-2 mb-0">One nice collection of icons so you can add a more intuitive and playful touch to your website.</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="mb-4">
              <div class="py-5">
                <div class="icon text-primary">
                  <i class="fas fa-grimace"></i>
                </div>
              </div>
              <h5 class="">SVG illustrations</h5>
              <p class=" mt-2 mb-0">One nice collection of icons so you can add a more intuitive and playful touch to your website.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="mb-4">
              <div class="py-5">
                <div class="icon text-primary">
                  <i class="fab fa-twitter"></i>
                </div>
              </div>
              <h5 class="">Latest Bootstrap</h5>
              <p class=" mt-2 mb-0">A responsive and mobile-first theme built with the world's most popular component library.</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="mb-4">
              <div class="py-5">
                <div class="icon text-primary">
                  <i class="fab fa-sass"></i>
                </div>
              </div>
              <h5 class="">Built with Sass</h5>
              <p class=" mt-2 mb-0">Change one variable and the theme adapts. Colors, fonts, sizes ... you name it.</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="mb-4">
              <div class="py-5">
                <div class="icon text-primary">
                  <i class="fas fa-layer-group"></i>
                </div>
              </div>
              <h5 class="">700+ Components</h5>
              <p class=" mt-2 mb-0">Nicely customized components that can be reused anytime and anywhere in your project.</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="mb-4">
              <div class="py-5">
                <div class="icon text-primary">
                  <i class="fas fa-puzzle-piece"></i>
                </div>
              </div>
              <h5 class="">Everything is modular</h5>
              <p class=" mt-2 mb-0">Nicely customized components that can be reused anytime and anywhere in your project.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to action (v10) -->
    <section class="slice slice-lg">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card bg-gradient-dark shadow hover-shadow-lg border-0 position-relative zindex-100">
              <div class="card-body py-5">
                <div class="d-flex align-items-start">
                  <div class="icon">
                    <i class="fas fa-file-alt text-white"></i>
                  </div>
                  <div class="icon-text">
                    <h3 class="text-white h4">70+ example pages</h3>
                    <p class="text-white mb-0">You get 70+ pre-built pages for a variety of purposes that makes it the ideal point to start building websites of any kind.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card bg-primary shadow hover-shadow-lg border-0 position-relative zindex-100">
              <div class="card-body py-5">
                <div class="d-flex align-items-start">
                  <div class="icon text-white">
                    <i class="fas fa-question-circle"></i>
                  </div>
                  <div class="icon-text">
                    <h5 class="h4 text-white">6 months technical support</h5>
                    <p class="mb-0 text-white">Use our dedicated support email to send your issues or suggestions. We are here to help anytime: <strong>support@webpixels.io</strong></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer id="footer-main">
    <div class="footer footer-dark bg-gradient-primary footer-rotate">
      <div class="container">
        <div class="row pt-md">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <a href="index.html">
              <img src="assets/img/brand/white.png" alt="Footer logo" style="height: 70px;">
            </a>
            <p>Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
            <h6 class="heading mb-3">Account</h6>
            <ul class="list-unstyled">
              <li><a href="pages/account-profile.html">Profile</a></li>
              <li><a href="pages/account-settings.html">Settings</a></li>
              <li><a href="pages/account-billing.html">Billing</a></li>
              <li><a href="pages/account-notifications.html">Notifications</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
            <h6 class="heading mb-3">About</h6>
            <ul class="list-unstyled text-small">
              <li><a href="#">Services</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Careers</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4 mb-5 mb-lg-0">
            <h6 class="heading mb-3">Company</h6>
            <ul class="list-unstyled">
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Support</a></li>
            </ul>
          </div>
        </div>
        <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
          <div class="col-md-6">
            <div class="copyright text-sm font-weight-bold text-center text-md-left">
              © 2018-2019 <a href="https://webpixels.io" class="font-weight-bold" target="_blank">Webpixels</a>. All rights reserved.
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
              <li class="nav-item">
                <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/webpixelsofficial" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

@endsection



    ------------------------------------------------------------------- 
    -------------------------------------------------------------------   
    ----------------------------------------- CONTROLLER CODES --------
    -------------------------------------------------------------------
    -------------------------------------------------------------------
    
    
    -------------------------------------------------------------------VALIDATION 
    $this->validate($request , [
      '' => 'required|max:10048|MIN:0 ' , 
    ]);
    -------------------------------------------------------------------FILE METHOD 
    if($request->hasFile('course_poster')){
      $poster = $request->file('course_poster'); 
      $path = public_path(). '/Poster/Course/';
      $poster_name = time() ."_". $request->course_poster->getClientOriginalName();
      $poster->move($path , $poster_name);
      $poster_path = '/Poster/Course/'.$poster_name; 
    }

    -------------------------------------------------------------------CREATE METHOD 
    $  = Course::create([
      '' =>  $request->,
      '' =>  $request->,
    ]);
    -------------------------------------------------------------------FIND METHOD 
    $ = Course::find($request->course_id);
    $course->save();
      
    -------------------------------------------------------------------WHERE METHOD 
    $ = DB::table('subject_lessons')
    ->where('subject_id','=', $id )
    ->get();
    -------------------------------------------------------------------UPDATE METHOD 
    DB::table('class_modules')->where('id', $id)
    ->update([
      'title' => $request->title,
    ]);
    -------------------------------------------------------------------DESTROY METHOD  
    public function destroy($id){
      $class = ClassModule::find($id);
      if(File::exists(public_path($class->class_poster))){
        File::delete(public_path($class->class_poster));
      }
      $class->delete();
      return redirect('/ClassModule')->with('warning','صنف موفقانه حذف شد');
    }//end of SubjectDestroy function 

    $course_id = DB::getPdo()->lastInsertId();
    if ( $lesson->isEmpty() ) {
     return response(['error' => 'Record not found'], 404);
    }

    -------------------------------------------------------------------RETURNS & REDIRECTS   
    return redirect()->route('create.poster', ['course_id' => $course_id]);
    return view("Course.Course.course_poster" , ['course_id' => $course_id]);
    return redirect('/Course/show/'. $course->id)->with('success' ,'کورس موفقانه تجدید شد')
    return back()->with('warning','مضمون موفقانه حذف شد');



    -------------------------------------------------------------------
    -------------------------------------------------------------------   
    ----------------------------------------- MODEL CODES -------------
    -------------------------------------------------------------------
    -------------------------------------------------------------------
   
    protected $table = 'live_course';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;

    -------------------------------------------------------------------IN MAIN MODEL   
    public function CourseLesson(){
        return $this->hasMany(CourseLesson::class);
    }
    -------------------------------------------------------------------IN SECONDARY MODEL  
    public function Course(){
      return $this->belongsTo(Course::class);
    }
    -------------------------------------------------------------------HOW TO USE IT   
    $course = Course::find($id);
    return view('Course.Course.show' , [
      'course' => $course,
      'course_faq' => $course->CourseFaq ,
      'course_preq' => $course->CoursePreq,
      'lessons'=> $course->CourseLesson,
    ]);


    -------------------------------------------------------------------
    -------------------------------------------------------------------   
    ----------------------------------------- VIEW CODES -------------
    -------------------------------------------------------------------
    -------------------------------------------------------------------





    @extends('layouts.app')
    @section('content')
    @endsection 

    {{__('class.subjectCardTitle')}}
    <form action="/Subject/update/{{$subject->id}}" method="post"  enctype="multipart/form-data"  >
    @csrf @method('PUT')
    </form>
    -------------------------------------------------------------------INPUT FIELD    
    <div class="col-md-6 col-sm-12 col-lg-6 ">
      <label for="">{{__('class.subjectTitle')}}</label>
      <input 
      type="text" 
      name="" 
      class="form-control @error('') is-invalid @enderror " 
      id="" 
      placeholder="{{__('class.subjectTitlePlace')}}" 
      value="{{ old('') }}" >
      @error('title') <div class="invalid-feedback">{{ $message }} </div> @enderror
    </div>
    -------------------------------------------------------------------FILE FIELD    
    <div class="col-md-6 col-sm-12 col-lg-6">
      <label for=""> {{__('class.subjectPoster')}}</label>
      <input type="file" name=""  id=""  class="custom-input-file"  />
      <label for=""><i class="fa fa-upload"></i><span>{{__('class.subjectPoster')}}</span></label>
    </div><!-- end of col  -->

    -------------------------------------------------------------------TEXTAREA FIELD   
    <div class="form-row">             
      <div class="col-md-12 mb-3">
        <label for="10212">{{__('class.description')}}</label>
        <textarea name="description" rows="8" cols="80" 
        class="form-control @error('description') is-invalid @enderror" 
        id="10212" placeholder = "{{__('class.descriptionPlaceholder')}}" >
        {{ old('description') }}
        </textarea>
        @error('description') <div class="invalid-feedback">{{ $message }} </div> @enderror
      </div>
    </div><!-- end of form row  -->

    -------------------------------------------------------------------SELECT  FIELD   
    <div class="form-group">
      <select name="lesson_type" class="custom-select"  >
          <option value = "LL">{{__('LivestreamCreate.independantLiveLesson')}}</option>
          <option value = "CLL">{{__('LivestreamCreate.courseLiveLesson')}}</option>
      </select>
    </div>

    -------------------------------------------------------------------RADIO  FIELD 
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-primary active">
            <input type="radio" name="custom-radio-2"  id="radioButton2" autocomplete="off" checked> Active
        </label>
        <label class="btn btn-primary">
            <input type="radio" name="custom-radio-2"  id="radioButton3" autocomplete="off"> Radio
        </label>
        <label class="btn btn-primary">
            <input type="radio" name="custom-radio-2"  id="radioButton4" autocomplete="off"> Radio
        </label>
    </div>

    -------------------------------------------------------------------SUBMIT  FIELD   
    <button class="btn btn-primary " type="submit">{{__('CourseCreate.save')}}</button>
    <button class="btn btn-danger" type="reset">{{__('CourseCreate.clear')}}</button>

    -------------------------------------------------------------------DELETE & UPDATE BUTTON  
    <a class="dropdown-item" href="/ClassModule/edit/{{$class->id}}" > تجدید کورس <i class="fas fa-edit"></i></a>
    <form class="" action="/ClassModule/delete/{{$class->id}}" method="post">
    @csrf  @method('DELETE')
    <button type="submit" onclick = "return confirm('آیا مطمیعن استید برای خذف کردن ؟')"  class = "dropdown-item ml-0"> حذف کردن صنف <i class="fas fa-trash-alt"></i> </button>
    </form>

    -------------------------------------------------------------------LOOPS

    @foreach($var as $v )
      $v->
    @endforeach
    
    -------------------------------------------------------------------ICONS 
    <i class="fas fa-save "></i>
    <i class="fas fa-atom-alt fa-3x"></i>
    <i class="fas fa-books"></i>
    <i class="fas fa-book-reader"></i>
    <i class="fas fa-book-alt"></i>
    <i class="fas fa-graduation-cap"></i>






    const element = truefalse[tf];
        console.log(element);
        var input = document.createElement("input");
        input.type = 'text' ; 
        input.name = tf;
        input.value = element.question; 
        form.appendChild(input);
        


        
    var multichoice = <?php echo $multichoice; ?>;
    for (let mc = 0; mc < multichoice.length; mc++) {
        const element = multichoice[mc];
        console.log(element.question);

        MultiChoiceDiv.innerHTML = element.question; 
        
    }


    setItem()	Add key/value in LocalStorage
getItem()	Get a value from LocalStorage
removeItem()	Remove item by its key
clear()	Remove all items from LocalStorage
key() Get a key of an item from LocalStorage

console.log(localStorage.tf_question_`${question}` );



if (typeof(Worker) !== "undefined") {
  // Yes! Web worker support!
  // Some code.....
} else {
  // Sorry! No Web Worker support..


  if (typeof(Storage) !== "undefined") {
       
       for (let tf = 0; tf < truefalse.length; tf++) {
           // console.log(truefalse[tf].question);
           var tf_item = "tf_" + truefalse[tf].id;
           localStorage.setItem(tf_item , truefalse[tf].question);
           console.log(localStorage.getItem(tf_item));
       }
       // localStorage.clear();
       console.log(localStorage);
       console.log(typeof(truefalse));
    

       // document.getElementById("result").innerHTML = localStorage.getItem("lastname");
       // console.log(localStorage.getItem("ss"))
       // Delete 
       // localStorage.removeItem("lastname");

   } else {
       console.log('Sorry! No Web Storage support')
   }
       

   // var inputOne = document.createElement("input");
        // var inputTwo = document.createElement("input");
        // var inputThree = document.createElement("input");
        // var inputFour = document.createElement("input");

        // input.type = 'radio' ; 
        // input.name = 'answer';
        // input.value = value; 
        // input.id = id + count++; 
        
        
        // form.appendChild(inputOne);
        // form.appendChild(inputTwo);
        // form.appendChild(inputThree);
        // form.appendChild(inputFour);

        @foreach($truefalse as $tf)
      <h4>{{$tf->question}}</h4>
    @endforeach 



          <?php $counter++;?>  
          @endforeach 



          // if(empty($request->ans1)){
    //   dd("Radio is Empty");

    // }
    // else {
    //   // dd($request->all()); 
    //   session(['key' => 'va76a5ds65as76f587dsf56dsa765sad6f5s76df56dsaf56sadf5ue']);

    //   if (session()->has('key')) {
    //     dd(session()->get('key'));
    //   }

    //   // session()->pull('key', 'default');






































































    


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="">


<section class="countdown-container">
  
  <div class="days-container">
    <div class="days"></div>
    <div class="days-label">days</div>
  </div>
  
  <div class="hours-container">
    <div class="hours"></div>
    <div class="hours-label">hours</div>
  </div>
  
  <div class="minutes-container">
    <div class="minutes"></div>
    <div class="minutes-label">minutes</div>
  </div>
  
  <div class="seconds-container">
    <div class="seconds"></div>
    <div class="seconds-label">seconds</div>
  </div>
  
</section>

<script>

  const countDownClock = (number = 1, format = 'seconds') => {
  const d = document;
  const daysElement = d.querySelector('.days');
  const hoursElement = d.querySelector('.hours');
  const minutesElement = d.querySelector('.minutes');
  const secondsElement = d.querySelector('.seconds');
  let countdown;
  convertFormat(format);
  
  
  function convertFormat(format) {
    switch(format) {
      case 'seconds':
        return timer(number);
      case 'minutes':
        return timer(number * 60);
        case 'hours':
        return timer(number * 60 * 60);
      case 'days':
        return timer(number * 60 * 60 * 24);             
    }
  }

  function timer(seconds) {
    const now = Date.now();
    const then = now + seconds * 1000;

    countdown = setInterval(() => {
      const secondsLeft = Math.round((then - Date.now()) / 1000);

      if(secondsLeft <= 0) {
        clearInterval(countdown);
        return;
      };

      displayTimeLeft(secondsLeft);

    },1000);
  }

  function displayTimeLeft(seconds) {
    daysElement.textContent = Math.floor(seconds / 86400);
    hoursElement.textContent = Math.floor((seconds % 86400) / 3600);
    minutesElement.textContent = Math.floor((seconds % 86400) % 3600 / 60);
    secondsElement.textContent = seconds % 60 < 10 ? `0${seconds % 60}` : seconds % 60;
  }
 }
    /*
    start countdown
    enter number and format
    days, hours, minutes or seconds
    */
</script>

    <hr>
    <div id="truefalse">
    
    </div>
<hr>
<form id="form" name="myForm" method="post" action = "/Examination/calculate">
    @csrf
    
   
    <!-- <input type="submit" value="Save"> -->
 </form>
<hr>

    <script>
    var form = document.getElementById('form');
    var TrueFalseDiv = document.getElementById('truefalse');
    var MultiChoiceDiv = document.getElementById('multichoice');
    var questions = []; 
    var truefalse = <?php echo $truefalse ; ?>;
    var multichoice = <?php echo $multichoice ; ?>;
    var question_time = []; 
    // console.log(truefalse);
   
    for (let index = 0; index < multichoice.length; index++) {
        questions.push(multichoice[index]);
        multichoice[index].type = 'mc';
    }

    for (let index = 0; index < truefalse.length; index++) {
        questions.push(truefalse[index]);
        truefalse[index].type = 'tf';
        question_time.push(truefalse[index].time);
    }

    console.log(questions);

    var count = 1; 
    var input = []; 
    var label = []; 

    function storeAnswer(event) {
      console.log('Clicked')
      console.log(event);
      console.log(event.target.id);
      console.log(event.target.value);
      console.log(event.target.name);
    // document.body.style.background = event.target.value;
    }
    
    function addElement(type , name , counter ){
      var limit = 0 ; 
      
      if(questions[counter].type == 'mc'){
        for (let index =0; index <= 3; index++) { 
            input[index] = document.createElement("input");
            input[index].addEventListener("change", storeAnswer);
            input[index].className = '';
            input[index].type = 'radio'; 
            input[index].name = name + counter; 
            input[index].id = counter + '_qs_' + index; 
            label[index] = document.createElement("label");
            label[index].setAttribute("for" , counter + '_qs_' + index);
            label[index].innerText = questions[counter].question;
            label[index].appendChild(input[index]);
            label[index].appendChild( document.createElement("br"));
            form.appendChild(label[index]);
        };
      }
      else if(questions[counter].type == 'tf'){
        for (let index =0; index <= 1; index++) { 
            input[index] = document.createElement("input");
            // input[index].addEventListener("change", storeAnswer);
            input[index].className = '';
            input[index].type = 'radio'; 
            input[index].name = name + counter; 
            input[index].id = counter + '_qs_' + index; 
            input[index].value = index++; 
            label[index] = document.createElement("label");
            label[index].setAttribute("for" , counter + '_qs_' + index);
            label[index].innerText = questions[counter].question;
            label[index].appendChild(input[index]);
            label[index].appendChild( document.createElement("br"));
            form.appendChild(label[index]);
        };
      }
      // checkbox.checked ? "mediumpurple" : "";
      return input; 
    }    
    // console.log(input);
   

        
   
    var timesRun = 0;
    var pc = 0 ; 

    var results = []; 
    
    //  data should pass to method 
    // then data must be embedded into elements 
    // after user check the elements data should pass to as results to server 
    // redirect to result page 

    var interval = setInterval(() => {
      console.log(timesRun)
      if(timesRun >= questions.length - 1 ){
        console.log('interval is finished / form submitted');
        // document.myForm.submit();
        clearInterval(interval);

      }
      // let element = "answer" + timesRun ; 
      // pc = timesRun 
      
      // if(pc != 0){
      //   for (let index = 0; index < arr.length; index++) {
      //     console.log('removed ' + arr[index].id);
      //     document.getElementById(arr[index].id).remove();
      //     // para.style.color = "magenta";
      //   }
      // }

      addElement('multichoice', 'answer', timesRun );

      timesRun++;
    }, 1000);
      













    // after each timout remove an bring next question 

    // setInterval(() => {
    //     // add_element("ans");
    //     // countDownClock(3);
    // }, 3000);

    // const array = [0, 1, 2, 4, 8, 16, 32, 16, 8, 4, 2, 1, 0];


    // for (let i = 0; i < question_time.length; i++) {
    //     // TrueFalseDiv.innerHTML = quiz[i].question;
    //     setInterval(function () {
    //         TrueFalseDiv.innerHTML = quiz[i].question ; 
    //         countDownClock(question_time[i]);
    //     }, question_time[i] * 1000)
    // }




 // for (let i = 0; i < question_time.length; i++) {
    //     TrueFalseDiv.innerHTML = quiz[i].question;
    //     setTimeout(function () {
    //         TrueFalseDiv.innerHTML = quiz[i].question ; 
    //         add_element("ans");
    //         countDownClock(question_time[i]);
    //     }, question_time[i] * 1000)
    // }

    // for (let i = 0; i < 10; i++) {
    //   setInterval(() => {
    //     console.log(i); 
    //   }, 3000);
    //   console.log(i); 
    // }



















    // console.log(truefalse);
    // console.log(quiz[index].question);
    //     console.log(quiz[index].time);
    //     console.log(quiz[index].score);
    //     console.log(quiz[index].id)

    </script>





</body>
</html>





