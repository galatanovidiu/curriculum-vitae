<template>
    <Head title="Galatan Ovidiu Iulian | Curriculum Vitae"/>

    <div class="flex justify-start">
        <div class="w-72 bg-gray-700 text-white min-h-screen p-6 flex-shrink-0">
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
            </ul>
        </div>
        <div class="bg-white text-gray-700 min-h-screen p-6 flex-1">
            <h1 class="mb-0">Galatan Ovidiu Iulian</h1>
            <h2 class="text-xl">Fullstack Web Developer</h2>

            <h3>Profile</h3>

            <p>I'm working as a web developer since 2005.</p>

            <h3>My Stack</h3>
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
                litespeed. As an os I've mostly used Ubuntu and CentOS </p>

            <p><strong>Services:</strong></p>

            <p><strong>Continuous Integration:</strong></p>

            <p><strong>Tests:</strong></p>

            <h2>Work History</h2>

            <div>
                <h3>DXC - Hemodynamic Modelling Simulator</h3>
                <p>This was a 4 parts project built on Laravel for backend and VueJS on the frontend </p>
                <ol class="list">
                    <li>A VueJS app for users (Usually they are doctors)</li>
                    <li>Laravel Backend for The interface</li>
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
                    programs like Amazon, CJ.</p>
            </div>
            <div>
                <h2>Bigrock - OX software</h2>
                <p>This is one of my first big projects built with Yii framework and vanila JS</p>
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

            <h3>Timeline</h3>

            <div>
                <ul>
                    <li v-for="l in timeline" class="mb-4">
                        <div class="relative pb-8">
                            <span class="absolute top-5 left-6 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                            <div class="relative flex items-start space-x-3">
                                <div class="relative">
                                    <list-date-display :year="l.startDate.year"
                                                       :month="l.startDate.month"></list-date-display>
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
