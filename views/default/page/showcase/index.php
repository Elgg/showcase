<?php
/**
 * This page must be included by the Elgg engine or it will not work.
 */

elgg_load_css('elgg');
elgg_load_css('elgg/gallery/showcase');
elgg_load_css('elgg/showcase');

$vars['title'] = 'Elgg Showcase';

?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo elgg_view('page/elements/head', $vars); ?>
	<meta name="description" content="A catalog of social networks and websites powered by Elgg.">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div class="elgg-page elgg-page-default">
            
            <div class="elgg-page-header">
                <div class="elgg-inner">
                    <?php echo elgg_view('page/elements/header', $vars); ?>
                </div>
            </div>
            
            <div class="elgg-page-body">
                <div class="elgg-inner">
                    <div class="elgg-layout elgg-layout-one-column">
                        <div class="elgg-main elgg-body">
                            <div class="elgg-head">
				<a href="mailto:info@elgg.org" class="elgg-button elgg-button-action float-alt">
					<?php echo elgg_echo('showcase:suggest'); ?>
				</a>
                                <h2 class="elgg-heading-main">
                                    <?php echo elgg_echo('showcase'); ?>
                                </h2>
                            </div>
                            <div class="elgg-body">
                                <ul class="elgg-gallery elgg-gallery-showcase" data-ng-controller="ElggShowcase">
                                    <li data-ng-repeat="item in items">
                                        <div class="elgg-showcase-item">
                                            <img data-ng-src="/mod/showcase/assets/images/{{item.image.url}}" />
                                            <div class="elgg-showcase-info">
                                                <h2 class="elgg-showcase-title">
                                                    <a href="{{item.targetUrl}}">
                                                        {{item.displayName}}
                                                    </a>
                                                </h2>
                                                <p>{{item.summary}}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End layout body -->
                        </div>
                    </div>
                    <!-- End page body content -->
                </div>
            </div>
            
            <div class="elgg-page-footer">
                <div class="elgg-inner">
                    <?php echo elgg_view('page/elements/footer', $vars); ?>
                </div>
            </div>
        </div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.1.1/require.min.js"></script>
        <script>
            require.config({
                paths: {
                    "jquery": "//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min",
                    "angular": "//ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular.min",
                    "angular-sanitize": "//ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular-sanitize.min",
                },
                shim: {
                    'angular': {
                        deps: ['jquery'],
                        exports: 'angular',
                    },
                    'angular-sanitize': {
                        deps: ['angular'],
                    },
                },
                waitSeconds: 15,
            });
            
            require(['angular', 'angular-sanitize'], function(angular) {
                angular.bootstrap(document, ['ngSanitize']);
            });
        
            function ElggShowcase($scope) {
                $scope.items = [{
			displayName: 'My MS Community',
			summary: 'Connecting people affected by multiple sclerosis',
			targetUrl: 'http://mymscommunity.msaustralia.org.au/',
			image: {
				url: 'mymscommunity-screenshot.jpg',
			}
		}, {
                    displayName: 'Elgg Community',
                    summary: 'Support from community members. Plugins and themes repository.',
                    targetUrl: 'http://community.elgg.org',
                    image: {
                        url: 'elgg-community-screenshot.jpg'
                    },
                }, {
                    displayName: 'Health Education Africa Resource Team',
                    summary: 'Empowering the people of Africa to survive the HIV/AIDS pandemic.',
                    targetUrl: 'http://africaheart.org',
                    image: {
                        url: 'africaheart-screenshot.jpg'
                    },
                }, {
                    displayName: 'CourseWare',
                    summary: 'CourseWare is an online system that makes communication among course members more effective and efficient.',
                    targetUrl: 'https://courseware.stanford.edu',
                    image: {
                        url: 'courseware-screenshot.jpg'
                    },
                }, {
                    displayName: 'Planet Red',
                    summary: 'Social network for the University of Nebraska-Lincoln.',
                    targetUrl: 'http://planetred.unl.edu',
                    image: {
                        url: 'planetred-screenshot.jpg'
                    },
                }, {
                    displayName: 'Team Webgalli',
                    summary: 'Professional elgg developers and elgg consultants from India.',
                    targetUrl: 'http://webgalli.com',
                    image: {
                        url: 'webgalli-screenshot.jpg'
                    },
                }, {
                    displayName: 'Interfaith Family',
                    summary: 'Supporting interfaith families exploring Jewish life',
                    targetUrl: 'http://interfaithfamily.com/elgg',
                    image: {
                        url: 'interfaithfamily-screenshot.jpg'
                    },
                }, {
                    displayName: 'CMC Alumni',
                    summary: 'To connect and unite the past and present students of CMC Cochin.',
                    targetUrl: 'http://cmccochin.org/alumni',
                    image: {
                        url: 'cmc-alumni-screenshot.jpg'
                    },
                }, {
                    displayName: 'Hedgehogs.net',
                    summary: 'A social application platform for the hedge fund and investment community.',
                    targetUrl: 'http://hedgehogs.net',
                    image: {
                        url: 'hedgehogs-screenshot.jpg'
                    }
                }, {
                    displayName: 'Alianza Arboles',
                    summary: 'A network that brings together individuals and organizations with the common goal of planting trees.',
                    targetUrl: 'http://alianzaarboles.org',
                    image: {
                        src: 'alianzaarboles-screenshot.jpg'
                    }
                }, {
                    displayName: 'N-1',
                    summary: 'Autonomous social network for social movements with emphasis on security, privacy and federation.',
                    targetUrl: 'https://n-1.cc',
                    image: {
                        url: 'n-1-screenshot.jpg'
                    }
                }, {
                    displayName: 'Formavia',
                    summary: 'Regional professional network (Rhône-Alpes, France), ICT and lifelong learning.',
                    targetUrl: 'http://id.formavia.fr/',
                    image: {
                        url: 'formavia-screenshot.jpg'
                    }
                }, {
                    displayName: 'Fing',
                    summary: 'Social network of the Fondation Internet Nouvelle Génération.',
                    targetUrl: 'http://www.reseaufing.org/',
                    image: {
                        url: 'reseaufing-screenshot.jpg'
                    }
                }, {
                    displayName: 'Athabasca Landing',
                    summary: 'A social site for staff, students and friends of Athabasaca University, Canada\'s open university',
                    targetUrl: 'https://landing.athabascau.ca/',
                    image: {
                        url: 'athabasca-screenshot.jpg'
                    }
                }, {
                    displayName: 'Guinea pigs and hamsters',
                    summary: 'Social Network for guinea pigs and hamster lovers.',
                    targetUrl: 'http://guineapigsandhamsters.com',
                    image: {
                        url: 'guineapigs-screenshot.jpg'
                    }
                }, {
		    displayName: 'Vazco',
		    summary: 'Professional Elgg developers from Poland, with articles about optimizing Elgg',
		    targetUrl: 'http://vazco.eu',
		    image: {
		        url: 'vazco-screenshot.jpg'
		    }
		}, {
		    displayName: 'Spotwork',
		    summary: 'A french community for professionals seeking a place to show their skills',
		    targetUrl: 'http://spotwork.fr',
		    image: {
		        url: 'spotwork-screenshot.jpg'
		    }
		}, {
		    displayName: 'bauintelligenz (Intranet)',
		    summary: 'Construction site management platform, with interactive timeline',
		    targetUrl: '',
		    image: {
		        url: 'bauintelligenz-screenshot.jpg'
		    }
		}, {
		    displayName: 'ExerciseFriends',
		    summary: 'A website for people searching for a training partner, with 150k registered users',
		    targetUrl: 'http://exercisefriends.com',
		    image: {
		        url: 'exercisefriends-screenshot.jpg'
		    }
		}, {
		    displayName: "MGO",
		    summary: 'A private community of people who share the same passion about golf around the world',
		    targetUrl: 'http://www.mgogolf.com/',
		    image: {
		        url: 'mgogolf-screenshot.jpg'
		    }
		}];
            }
        </script>
        <script src="//raw.github.com/LeaVerou/prefixfree/gh-pages/prefixfree.min.js"></script>
    </body>
</html>
