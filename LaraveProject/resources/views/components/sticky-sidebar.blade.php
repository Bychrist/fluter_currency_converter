
<div class="col-lg-3 StickySidebar">
    <div class="filter-clear">
        <div class="clear-filter d-flex align-items-center">
            <h4>&nbsp;</h4>
            <div class="clear-text">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
        </div>


        <div class="card search-filter categories-filter-blk" style="margin-top:-6px;">
            <div class="card-body">
                <div class="filter-widget mb-0">
                    <div class="categories-head d-flex align-items-center">
                        <h4>Course List</h4>
                        <i class="fas fa-angle-down"></i>
                    </div>
                    @foreach($share_courses as $course)

                        <div>
                            <label class="custom_check">

                               {{$course->title}}

                            </label>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>



        <div class="card search-filter">
            <div class="card-body">
                <div class="filter-widget mb-0">
                    <div class="categories-head d-flex align-items-center">
                        <h4>Trainers</h4>
                        <i class="fas fa-angle-down"></i>
                    </div>
                    @foreach($share_trainers as $trainer)
                    <div>
                        <label class="custom_check">

                            {{$trainer->name}}

                        </label>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>




    </div>
</div>
