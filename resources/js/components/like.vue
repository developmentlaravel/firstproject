<template>
        <span>
            <a href="#" v-if="isLike" @click.prevent="unLike(comment)">
                <i  class="fa fa-heart"></i>
            </a>
            <a href="#" v-else @click.prevent="like(comment)">
                <i  class="fa fa-heart-o"></i>
            </a>
        </span>
    </template>

    <script>
        export default {
            props: ['comment', 'liked'],

            data: function() {
                return {
                    isLike: '',
                }
            },

            mounted() {
                this.isLiked = this.isLiked ? true : false;
            },

            computed: {
                isLike() {
                    return this.liked;
                },
            },

            methods: {
                like(comment) {
                    axios.comment('/like/'+comment)
                        .then(response => this.isLiked = true)
                        .catch(response => console.log(response.data));
                },

                unLike(comment) {
                    axios.comment('/unlike/'+comment)
                        .then(response => this.isLiked = false)
                        .catch(response => console.log(response.data));
                }
            }
        }
    </script>
