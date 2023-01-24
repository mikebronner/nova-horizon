<template>
    <iframe
        :src="horizonPath"
        class="w-full"
        frameborder="0"
        scrolling="auto"
    ></iframe>
</template>

<script>
export default {
    data: function()
    {
        return {
            path: '',
        }
    },

    created()
    {
        this.getPath()
    },

    computed: {
        horizonPath: function()
        {
            return ('/' + this.path).replace('\/\/', '\/')
        },
    },

    methods: {
        getPath: function()
        {
            let self = this

            Nova.request().get('/genealabs/nova-horizon/path').then(function(response)
            {
                self.path = response.data
            })
        },
    },
}
</script>

<style>
iframe {
    height: 88vh;
}
</style>
