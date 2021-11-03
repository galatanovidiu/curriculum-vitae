<template>
    <Head title="Galatan Ovidiu Iulian | Fullstack web developer"/>

    <div class="container mx-auto px-4 py-4">

        <div class="flex mb-8">
            <img src="/images/galatan-ovidiu-iulian-profile-picture.jpeg" alt="Galatan Ovidiu Iulian - profile picture"
                 class="rounded-full w-48 h-48 object-cover">
            <div class="md:pl-8">
                <h1>Galatan Ovidiu Iulian</h1>
                <p>Born: 1980.04.30</p>
                <!--                ({{age}})-->
                <p>Married with 2 kids</p>
                Current Location: <a href="https://goo.gl/maps/4TFfzw6RRgudY7R27" target="_blank">Targu Mures, Mures, Romania</a>
                <p><strong>Contact:</strong></p>
                <ul class="pl:4 list">
                    <li><a href="mailto:galatanovidiu@gmail.com">galatanovidiu@gmail.com</a></li>
                    <li><a href="tel:+40757088709">+40 757 088 709</a></li>
                    <li><a href="skype:galatanovidiu">Skype</a></li>
                    <li><a href="https://www.facebook.com/galatanovidiu" target="_blank">Facebook</a></li>
                    <li><a href="https://twitter.com/galatanovidiu" target="_blank">Twitter</a></li>
                    <li><a href="https://www.linkedin.com/in/galatanovidiu/" target="_blank">LinkedIn</a></li>
                    <li><a href="https://github.com/galatanovidiu/" target="_blank">GitHub</a></li>
                </ul>
            </div>
        </div>

        <h2>My professional journey</h2>

        <h3>
            Intro
        </h3>

        <div>
            <ul>
                <li v-for="l in list" class="mb-4">
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
</template>

<style scoped>

</style>

<script>
import {defineComponent} from 'vue'
import {Head, Link} from '@inertiajs/inertia-vue3';
import List from "@/Partials/List";
import ListDateDisplay from "@/Partials/ListDateDisplay";

export default defineComponent({
    components: {
        ListDateDisplay,
        List,
        Head,
        Link,
    },

    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
        age: String
    },
    data() {
        return {
            list: []
        }
    }
})
</script>
