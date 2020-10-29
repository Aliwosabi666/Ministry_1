
@include('layouts.header')
            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="<?php echo url('/'); ?>index"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية</a>
                        </li>
                        <li class="active-bre"><a href="<?php echo url('/'); ?>"> لوحة التحكم الرئيسية</a>
                        </li>
                        <li class="page-back"><a href="<?php echo url('/'); ?>"><i class="fa fa-backward" aria-hidden="true"></i> تراجع</a>
                        </li>
                    </ul>
                </div>
                <!--== DASHBOARD INFO ==-->
                <div class="sb2-2-1">
                    <h2></h2>
                    <p></p>
                    <div class="db-2">
                        <ul>
                            <li>
                                <div class="dash-book dash-b-1">
                                    <h5>جميع الطلاب</h5>
                                    <h4>948</h4>
                                    <a href="<?php echo url('/'); ?>#">عرض اكثر</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-2">
                                    <h5>طلاب المغرب</h5>
                                    <h4>672</h4>
                                    <a href="<?php echo url('/student_morocco_all'); ?>#">عرض أكثر</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-3">
                                    <h5>طلاب الجزائر</h5>
                                    <h4>689</h4>
                                    <a href="<?php echo url('/algeria_students_all'); ?>">عرض أكثر</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-3">
                                    <h5>طلاب تونس</h5>
                                    <h4>689</h4>
                                    <a href="<?php echo url('/tunisia_students_all'); ?>">عرض أكثر</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-3">
                                    <h5>طلاب لبنان</h5>
                                    <h4>689</h4>
                                    <a href="<?php echo url('/lebanon_students_all'); ?>">عرض اكثر</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-4">
                                    <h5>طلاب الصين</h5>
                                    <h4>24</h4>
                                    <a href="<?php echo url('/china_students_all'); ?>">عرض أكثر</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Student Details</h4>
                                    <p>All about students like name, student id, phone, email, country, city and more</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Country</th>
                                                    <th>Id</th>
                                                    <th>Date of birth</th>
													<th>Status</th>
													<th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="list-img"><img src="<?php echo url('/'); ?>/images/user/1.png" alt=""></span>
                                                    </td>
                                                    <td><a href="<?php echo url('/'); ?>"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>united states</td>
                                                    <td>ST17241</td>
													<td>03 Jun 1990</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="<?php echo url('/'); ?>" class="ad-st-view">View</a></td>
                                                </tr>                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Google Map</h4>
                                    <p>Education is about teaching, learning skills and knowledge.</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi tab-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290413.804893654!2d-93.99620524741552!3d39.66116578737809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1469954001005" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('layouts.footer')