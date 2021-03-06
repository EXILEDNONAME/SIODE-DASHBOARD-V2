<div class="dropdown">
  <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
      <span class="svg-icon svg-icon-xl svg-icon-primary">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <rect x="0" y="0" width="24" height="24" />
            <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
            <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
          </g>
        </svg>
      </span>
      <span class="pulse-ring"></span>
    </div>
  </div>

  <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
    <form>
      <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(/assets/backend/media/misc/bg-1.jpg)">
        <h4 class="d-flex flex-center rounded-top">

          <span id="refresh" class="btn btn-success btn-font-md"><i class="flaticon2-refresh"></i> </span>


          <span class="text-white">User Notifications</span>
          <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">
            <?php $count_notification = \DB::table('notifications')->where('read_at', NULL)->get()->count(); ?>
            <span id ="text1"> {{ $count_notification }} </span>
          </span>
        </h4>
        <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">
          <li class="nav-item">
            <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_events">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#topbar_notifications_notifications">Alerts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs">Logs</a>
          </li>
        </ul>
      </div>

      <!-- TAB CONTENT -->
      <div class="tab-content">

        <div class="tab-pane p-8" id="topbar_notifications_notifications" role="tabpanel">
          <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">

            <!-- ITEM -->
            <?php $notifications = \App\User::find(1)->notifications; ?>
            @foreach($notifications as $notification)
            @foreach ($notification->data as $test)
            @if ($notification->read_at != FALSE )
            <a href="javascript:;" class="navi-item">
              <div class="navi-link">
                <div class="navi-text">
                  <div class="font-weight-light"><small> {{ $test['name'] }} </small></div>
                  <?php $db = \App\User::where('id', $test['created_by'])->get() ?>
                  @foreach($db as $user)
                  <small><div class="text-muted"> {{ $notification->created_at->diffForHumans() }}, {{ $user->name }} </div></small>
                  @endforeach
                </div>
              </div>
            </a>
            @else
            <a href="javascript:;" class="navi-item change" data-id="{{ $notification->id }}">
              <div class="navi-link">
                <div class="navi-text">
                  <small><div class="font-weight-bold text-success"> {{ $test['name'] }} ini telah di simpan ke database </div></small>

                  <?php $db = \App\User::where('id', $test['created_by'])->get() ?>
                  @foreach($db as $user)
                  <small><div class="text-muted"> {{ $notification->created_at->diffForHumans() }}, {{ $user->name }} </div></small>
                  @endforeach
                  <span class="text-right label label-sm label-success label-inline mr-2">
                    New
                  </span>
                </div>
              </div>
              @endif
            </a>
            @endforeach
            @endforeach

          </div>
          <div class="d-flex flex-center pt-7">
            <a href="#" class="btn btn-sm btn-light-primary font-weight-bold text-center">See All</a>
          </div>
        </div>

        <div class="tab-pane active show" id="topbar_notifications_events" role="tabpanel">
          <div class="navi navi-hover scroll my-4" data-scroll="true" data-height="300" data-mobile-height="200">

            <div id="here">
              <!-- TEST -->
              <?php $notifications = \App\User::find(1)->notifications; ?>
              @foreach($notifications as $notification)
              @foreach ($notification->data as $test)
              @if ($notification->read_at != FALSE )
              <a href="javascript:;" class="navi-item">
                <div class="navi-link">
                  <div class="navi-text">
                    <div class="font-weight-light"><small> {{ $test['name'] }} </small></div>
                    <?php $db = \App\User::where('id', $test['created_by'])->get() ?>
                    @foreach($db as $user)
                    <small><div class="text-muted"> {{ $notification->created_at->diffForHumans() }}, {{ $user->name }} </div></small>
                    @endforeach
                  </div>
                </div>
              </a>
              @else
              <a href="javascript:;" class="navi-item change" data-id="{{ $notification->id }}">
                <div class="navi-link">
                  <div class="navi-text">
                    <small><div class="font-weight-bold text-success"> {{ $test['name'] }} ini telah di simpan ke database </div></small>

                    <?php $db = \App\User::where('id', $test['created_by'])->get() ?>
                    @foreach($db as $user)
                    <small><div class="text-muted"> {{ $notification->created_at->diffForHumans() }}, {{ $user->name }} </div></small>
                    @endforeach

                  </div>
                  <div class="navi-icon mr-2">
                    <div id="alert-message">
                      <span class="label label-sm label-success label-inline mr-2">
                        New
                      </span>
                    </div>
                  </div>
                </div>
                @endif
              </a>
              @endforeach
              @endforeach
            </div>
          </div>
        </div>

        <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
          <div class="d-flex flex-center text-center text-muted min-h-200px">All caught up!
            <br />No new notifications.</div>
          </div>
        </div>
      </form>
    </div>
  </div>
