<template>
    <iframe
        src="/horizon"
        class="w-full"
        frameborder="0"
        scrolling="auto"
    ></iframe>
</template>

<script>
export default {
    created: function() {
        //
    },
}
</script>

<style>
    div.px-view.py-view.mx-auto,
    div.px-view.py-view.mx-auto > div,
    div.px-view.py-view.mx-auto > div > iframe {
        height: 100%;
    }

    div.px-view.py-view.mx-auto {
        padding-top: 0;
    }
</style>
