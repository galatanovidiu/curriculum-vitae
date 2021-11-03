<template>
    <Head title="Galatan Ovidiu Iulian | Full Stack Web Developer"/>

    <div class="flex justify-start">
        <div class="bg-white text-gray-700 min-h-screen p-6 flex-1 order-2">
            <h1 class="mb-0">Galatan Ovidiu Iulian</h1>
            <h2 class="text-xl">Fullstack Web Developer</h2>

            <h3 class="mt-8">Profile</h3>

            <p>I'm working as a web developer since 2005, and most of my projects have been around Laravel, WordPress, VueJSa and ReactJS ecosystems</p>

            <h3 class="mt-8">My Stack</h3>
            <p><strong>PHP:</strong> As a back end web developer my main focus right now is Laravel but I've also done
                lots of WordPress development in the past mainly with Roots/Sage and Roots/Bedrock for a more modern
                development workflow; Also I have a bit of experience with python also.</p>

            <p><strong>DB:</strong> for DB's I manly use MySQL and some of its favors like MariaDB and Percona, but also
                NoSQL DB's like MongoDB, Redis, Memcache and in a few occasions I've also use ElasticSearch</p>

            <p><strong>JavaScript:</strong> my main focus is on VueJS but I've also use ReactJS on a few projects and
                for building Gutenberg blocks. In the past I've used Angular. Some of the helper libraries I use from
                time to time are lodash, jQuery, Leaflet and more </p>

            <p><strong>CSS:</strong> I prefer whenever is possible to use SASS. Also whenever is possible I like to use
                Tailwindcss. In the past I've also used Bootstrap, Foundation and Bulma</p>

            <p><strong>Server:</strong> For servers I've mostly used Nginx and Apache but also in one occasion I've used
                litespeed. Mostly used OS's have been Ubuntu and CentOS </p>

            <p>
                <strong>Others:</strong>
                AWS Services, Docker, CI/CD trough github and gitlab, Unit Testing, Feature Testing, e2e Testing ...
            </p>

            <h2 class="mt-8">Work History</h2>

            <div>
                <h3>DXC - Hemodynamic Modelling Simulator</h3>
                <p>This was a 4 parts project built on Laravel for backend and VueJS on the frontend. Hosting is done on AWS and I've also used AWS batch for starting multiple simulations at once</p>
                <ol class="list">
                    <li>A VueJS app for users (Usually they are doctors)</li>
                    <li>Laravel Backend for the interface</li>
                    <li>A laravel microservice for handling the simulator.</li>
                    <li>A vueJS app for administrating the users, adding raw simulations configurations and starting
                        simulations in a batch
                    </li>
                </ol>
            </div>
            <div>
                <h3>Euroblox - European ads platform</h3>
                <p>This is a personal project built with Laravel and Livewire</p>
            </div>
            <div>
                <h3>Coachical - Digital Coaching</h3>
                <p>This LMS has bin build with Laravel and VueJS but it also have a WordPress component just because the
                    teaches on the platform prefer WordPress for writing the content, so I can say is a hybrid app</p>
            </div>
            <div>
                <h3>RunRepat - Reviews of athletic shoes</h3>
                <p>This project has started as a WordPress website, but after the first year we have rebuild the website
                    in Laravel.</p>
                <p>There is alo a 2nd component of this project, an app that extracts products from different affiliates
                    programs like Amazon, CJ...</p>
            </div>
            <div>
                <h2>Bigrock - OX software</h2>
                <p>This is one of my first big projects built with Yii framework and vanilla JS</p>
            </div>

            <h3>And Lost of wordpress websites:</h3>
            <ul class="list">
                <li><a href="https://hemsol.se/" target="_blank"><strong>hemsol.se</strong></a>: ReactJS for the solar cells calculator, Wordpress + Roots/Sage, Google Maps API</li>
                <li><a href="https://impact.intouniversity.org/" target="_blank"><strong>IntoUniversity Impact Map</strong></a>: VueJS, Wordpress + Roots/Sage, leaflet for the maps</li>
                <li><a href="https://www.xn--lnea-qoa.se/" target="_blank"><strong>lånea.se</strong></a>: Wordpress + Roots/Sage</li>
                <li><a href="https://www.thedetroitbureau.com/" target="_blank"><strong>thedetroitbureau.com</strong></a>: Wordpress + Roots/Sage</li>
                <li><a href="https://protectmycarwarranties.com/" target="_blank"><strong>protectmycarwarranties.com</strong></a>: Wordpress + Roots/Sage</li>
                <li><a href="https://www.peststrategies.com/exterminators/" target="_blank"><strong>peststrategies.com</strong></a>: Wordpress + Roots/Sage</li>
                <li><a href="https://personalgourmetmeals.com/" target="_blank"><strong>personalgourmetmeals.com</strong></a>: Wordpress + Roots/Sage + WooCommerce</li>
                <li><a href="https://www.vikingcold.com/" target="_blank"><strong>vikingcold.com</strong></a>: Wordpress + Roots/Sage</li>
                <li><a href="https://www.dovetailsvintage.co.uk/" target="_blank"><strong>dovetailsvintage.co.uk</strong></a>: Wordpress + Woocommerce</li>
                <li>And many, many  more ....</li>
            </ul>

            <h2 class="mt-8">Timeline</h2>

            <div>
                <ul>
                    <li v-for="l in timeline" class="mb-4">
                        <div class="relative pb-8">
                            <span class="absolute top-5 left-6 -ml-px h-full w-0.5 bg-gray-200 last:hidden" aria-hidden="true"></span>
                            <div class="relative flex items-start space-x-3">
                                <div class="relative">
                                    <list-date-display :year="l.startDate.year"
                                                       :month="l.startDate.month" style="break-inside: avoid;"></list-date-display>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <h3 class="font-medium text-gray-900 mb-0">{{ l.title }}</h3>
                                    <div class="text-sm text-gray-600 font-bold">
                                        {{l.startDate.month}}/{{l.startDate.year}}
                                        -
                                        <span v-if="l.endDate">{{l.endDate.month}}/{{l.endDate.year}}</span>
                                    </div>
                                    <div class="mt-2 text-sm text-gray-700">
                                        <div v-html="l.shortDescription"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="hidden printable mt-8 text-sm ">
                To make sure you are viewing the latest version of my CV check the online version on <a href="https://ovidiu.galatan.info/">ovidiu.galatan.info</a>
            </div>
        </div>
        <div class="w-72 bg-gray-700 text-white min-h-screen p-6 flex-shrink-0 order-1">
            <div class="flex items-center justify-center">
                <img src="/images/galatan-ovidiu-iulian-profile-picture.jpeg"
                     alt="Galatan Ovidiu Iulian - profile picture"
                     class="rounded-full w-48 h-48 object-cover">
            </div>
            <div>
                <h1 class="text-center py-4 text-2xl">Galatan Ovidiu Iulian</h1>
            </div>

            <ul>
                <li>Born: 30.04.1980</li>
                <li>Nationality: Romanian</li>
            </ul>

            <ul>
                <li>Phone: <a href="tel:+40757088709" class="text-indigo-100 font-bold">+40 757 088 709</a></li>
                <li>Email: <a href="mailto:galatanovidiu@gmail.com" class="text-indigo-100 font-bold">galatanovidiu@gmail.com</a></li>
                <li>Skype: <a href="skype:galatanovidiu" class="text-indigo-100 font-bold">galatanovidiu</a></li>
                <li>Twitter: <a href="https://twitter.com/galatanovidiu" target="_blank" class="text-indigo-100 font-bold">galatanovidiu</a></li>
                <li>Facebook: <a href="https://www.facebook.com/galatanovidiu" target="_blank" class="text-indigo-100 font-bold">galatanovidiu</a></li>
                <li>LinkedIn: <a href="https://www.linkedin.com/in/galatanovidiu/" target="_blank" class="text-indigo-100 font-bold">galatanovidiu</a></li>
                <li>GitHub: <a href="https://github.com/galatanovidiu?tab=repositories" target="_blank" class="text-indigo-100 font-bold">github.com/galatanovidiu</a></li>
            </ul>

            <h3>Skills</h3>

            <ul class="space-y-3">
                <li>
                    PHP
                    <div class="bg-indigo-100 w-full rounded h-3">
                        <div  class="bg-indigo-500 w-full rounded h-3"></div>
                    </div>
                </li>
                <li>
                    OOP
                    <div class="bg-indigo-100 w-full rounded h-3">
                        <div  class="bg-indigo-500 w-full rounded h-3 w-11/12"></div>
                    </div>
                </li>
                <li>
                    MySQL
                    <div class="bg-indigo-100 w-full rounded h-3">
                        <div  class="bg-indigo-500 w-full rounded h-3"></div>
                    </div>
                </li>
                <li>
                    Laravel
                    <div class="bg-indigo-100 w-full rounded h-3">
                        <div  class="bg-indigo-500 w-full rounded h-3 w-11/12"></div>
                    </div>
                </li>
                <li>
                    WordPress
                    <div class="bg-indigo-100 w-full rounded h-3">
                        <div  class="bg-indigo-500 w-full rounded h-3"></div>
                    </div>
                </li>
                <li>
                    HTML
                    <div class="bg-indigo-100 w-full rounded h-3">
                        <div  class="bg-indigo-500 w-full rounded h-3"></div>
                    </div>
                </li>
                <li>
                    CSS
                    <div class="bg-indigo-100 w-full rounded h-3">
                        <div  class="bg-indigo-500 w-full rounded h-3"></div>
                    </div>
                </li>
                <li>
                    SASS
                    <div class="bg-indigo-100 w-full rounded h-3">
                        <div  class="bg-indigo-500 w-full rounded h-3"></div>
                    </div>
                </li>
                <li>
                    JavaScript
                    <div class="bg-indigo-100 w-full rounded h-3">
                        <div  class="bg-indigo-500 w-full rounded h-3 w-11/12"></div>
                    </div>
                </li>
                <li>
                    VueJS
                    <div class="bg-indigo-100 w-full rounded h-3">
                        <div  class="bg-indigo-500 w-full rounded h-3 w-11/12"></div>
                    </div>
                </li>
                <li>
                    ReactJS
                    <div class="bg-indigo-100 w-full rounded h-3">
                        <div  class="bg-indigo-500 w-full rounded h-3 w-9/12"></div>
                    </div>
                </li>
                <li>
                    Git (GitHub, GitLab, Bitbucket)
                    <div class="bg-indigo-100 w-full rounded h-3">
                        <div  class="bg-indigo-500 w-full rounded h-3 w-11/12"></div>
                    </div>
                </li>
                <li>
                    AWS Services
                    <div class="bg-indigo-100 w-full rounded h-3">
                        <div  class="bg-indigo-500 w-full rounded h-3 w-10/12"></div>
                    </div>
                </li>
                <li>
                    Leadership
                    <div class="bg-indigo-100 w-full rounded h-3">
                        <div  class="bg-indigo-500 w-full rounded h-3 w-10/12"></div>
                    </div>
                </li>
                <li>
                    Team Player
                    <div class="bg-indigo-100 w-full rounded h-3">
                        <div  class="bg-indigo-500 w-full rounded h-3"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</template>

<script>
import {defineComponent} from 'vue'
import {Head, Link} from '@inertiajs/inertia-vue3';
import ListDateDisplay from "@/Partials/ListDateDisplay";
import List from "@/Partials/List";

export default defineComponent({
    name: "CurriculumVitae",
    components: {
        Head,
        Link,
        ListDateDisplay,
        List,
    },
    data(){
        return {
            timeline: []
        }
    },
    mounted() {
        this.getTimeline();
    },
    methods: {
        getTimeline(){
            const self = this
            fetch('/data/time.json').then(response => response.json()).then(data => {
                self.timeline = data
            })
        }
    }

})
</script>

<style scoped>

</style>
