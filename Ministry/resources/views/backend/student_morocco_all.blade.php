@include('layouts.header')

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                @include('includes.messages') 
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية</a>
                        </li>
                        <li class="active-bre"><a href="#">طلاب المغرب</a>
                        </li>
                        <li class="page-back"><a href="index.html"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> print</a>
                        </li>
                    </ul>
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
                                                    <th>الرقم</th>
                                                    <th>الصورة</th>
                                                    <th>الأسم</th>
                                                    <th>عام الأيفاد</th>
                                                    <th>الدرجة العلمية</th>
                                                    <th>التخصص</th>
                                                    <th>المنحة الربعية</th>
                                                    <th>الملاحظات</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
													<th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($mrc_std as $mrc_std)
                                                <tr>
                                                   
                                                    <td><a href="#"><span class="list-enq-name">{{$mrc_std->id}}</span><span class="list-enq-city"></span></a>
                                                    </td>
                                                    <td><span class="list-img"><img src="{{asset('storage/coverImages/' . $mrc_std->image)}}" alt=""></span>
                                                    </td>
                                                    <td>{{$mrc_std->name}}</td>
                                                    <td>{{$mrc_std->year_of_dispatch}}</td>
                                                    <td>{{$mrc_std->Degree}}</td>
                                                    <td>{{$mrc_std->specialization}}</td>
                                                    <td>{{$mrc_std->quarterly_grant}}</td>
													<td>{{$mrc_std->observation}}</td>
                                                    <td>
                                                        <a href="{{ '/backend/' . $mrc_std->id . '/student_morocco_edit'}}"> <span class="label label-success">Edit</span></a>
                                                    </td>
                                                    <td>
                                                        <form action="{{route('backend.destroy', ['id' => $mrc_std->id])}}" method="POST">                    
                                                            @csrf
                                                            @method('DELETE')                                                        
                                                        <button type="submit" class="label label-success"> Delete</button>
                                                    </form>
                                                    </td>
                                                    <td><a href="admin-student-details.html" class="ad-st-view">archive</a></td>
                                                    
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
