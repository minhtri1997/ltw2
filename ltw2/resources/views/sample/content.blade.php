<div class="type-129">
    <div class="container">
        <div class="row">
            <div class="poetry">Danh sách sinh viên</div>
            <div class="sensei-message info">
                <i class="fa fa-info-circle" aria-hidden="true"></i>Or <a href="#">log in</a> to access your purchased courses
            </div>
            <div class="media">
                @foreach($dataStudent as $item)
                <div class="blocknews">
                    <div class="circ-wrapper course_detail pull-left">
                        <h3>{!! $item->student_id !!}</h3>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="#">{!! $item->student_name !!}</a>
                        </h4>
                        <p>
                            {!! $item->student_info!!}
                        </p>
                        <ul class="data-lessons">
                            <li><i class="fa fa-envelope" aria-hidden="true"></i>{!! $item->student_email !!}</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> {!! $item->student_phone !!}</li>
                        </ul>
                    </div>
                </div>
                @endforeach
                <div class="clear-both"></div>
            </div>
        </div>
    </div>
</div>
