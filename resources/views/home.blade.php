@include('templates.head')

<div id="xrhome-root">
	<div class="page showCase">
	    @include('templates.header')

	    <main class="page-content main-before-footer">
	        <div class="sectionProfile blurb">
	            <div class="logo-jmp-0-1">
	                <img width="130" alt="Profile" src="{{ asset('images/photo.jpg') }}" style="object-fit: scale-down;" />
	            </div>
	            <div class="workspaceInfo">
	                <h1 class="workspaceName">Juan Martín Pacheco Pérez
	                </h1>
	                <div class="locationLink">
	                    <div class="locationIcon">
	                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" fill="#8083a2" class=""><path fill-rule="evenodd" d="M6.74062 15.6405C8.34375 13.629 12 8.7539 12 6.01557C12 2.69447 9.3125 0 6 0C2.6875 0 0 2.69447 0 6.01557C0 8.7539 3.65625 13.629 5.25938 15.6405C5.64375 16.1198 6.35625 16.1198 6.74062 15.6405ZM6 8.02076C4.89687 8.02076 4 7.12155 4 6.01557C4 4.90958 4.89687 4.01038 6 4.01038C7.10313 4.01038 8 4.90958 8 6.01557C8 7.12155 7.10313 8.02076 6 8.02076Z"></path>
	                        </svg>
	                        <p>CDMX, MX</p>
	                    </div>
	                    <span class="link"><i aria-hidden="true" class="linkify icon"></i>
	                        <a href="https://jmpacheco.itch.io/" target="_blank" rel="noopener noreferrer" >jmpacheco.itch.io</a>
	                    </span>
	                </div>
	                <p class="bio"> {{ $description }} </p>
	                <p class="linkOutsView">
	                    <a href="mailto:martinpacheco1192@gmail.com" class="likeLink mailTo-0-2-23"><i aria-hidden="true" class="mail icon"></i>
	                    </a>
	                    <!--<span class="separator"></span>
	                    <a target="_blank" rel="noopener noreferrer" href="https://twitter.com/"><i aria-hidden="true" class="twitter square icon socialIcon"></i>
	                    </a>
	                    <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/" ><i aria-hidden="true" class="linkedin icon socialIcon"></i>
	                    </a>-->
	                </p>
	            </div>
	        </div>
	        <section class="tabRow">
	            <a class="tab-jmp activeTab" data-section="overview">Overview</a>
	            <a class="tab-jmp" data-section="jobs">Detalle</a>
	            <a class="tab-jmp" data-section="projects">Proyectos</a>
	        </section>

	        <section class="module section centered">
	            <div class="overview">
	                <div class="featuredContentBlock">
	                    <p>Cada proyecto refleja pasión y creatividad.</p>

	                    @foreach ($experience as $job)
		                    <div class="containerName" style="margin-bottom: 6px;">
		                        <label><strong>{{ $job['activities'] }}</strong>{{ $job['description'] }}</label>
		                        <p>{{ $job['name'] }}</p>
		                    </div>
	                    @endforeach

	                </div>
	            </div>
	        </section>

	        <section class="module section centered d-none">
	            <div class="jobs">
	                <div class="featuredContentBlock">
	                    <p>Experiencia de las actividades desarrolladas.</p>

	                    @foreach ($jobs as $job)
	                    	<h2 class="title">{{ $job['title'] }}</h2>
		                    <div class="containerName">
		                        <label>{{ $job['name'] }}</label>
		                        <p>{{ $job['time'] }}</p>
		                    </div>
		                    <ul>
		                    	@foreach ($job['activities'] as $activity)
		                    		<li>{{ $activity }}</li>
		                    	@endforeach
		                    </ul>
	                    @endforeach

	                </div>
	            </div>
	        </section>

	        <section class="module section centered d-none">
	            <div class="projects sectionProfile tabbedLibraryView">
	                <div class="libraryGrid ">

	                	@foreach ($projects as $app)
		                    <div class="projectCard">
		                        <div class="card-jmp">
		                            <a >
		                                <img class="coverImage-jmp-0-1" draggable="false" src="{{ asset('images/'.$app['image']) }}" alt="{{ $app['name'] }}"/>
		                            </a>
		                        </div>
		                        <div class="appInfo-jmp-0-1">
		                            <div class="appText">
		                                <a >
		                                    <p class="appName" title="{{ $app['name'] }} ">{{ $app['name'] }}
		                                    </p>
		                                </a>
		                            </div>
		                            <div class="appIcons">
		                            	@if (!empty($app['icon']))
		                            		<img class="appTryout" src="{{ asset('static/asset/'.$app['icon']) }}" alt="Try it out" >
		                            	@endif
		                            </div>
		                        </div>
		                    </div>
	                    @endforeach

	                </div>
	            </div>
	        </section>
	    </main>

	    @include('templates.footer')
	    
	</div>
</div>

@include('templates.scripts')

<script type="text/javascript">
    jQuery(document).ready(toggle_theme);
    jQuery(document).ready(initial_profile);
</script>

@include('templates.end')