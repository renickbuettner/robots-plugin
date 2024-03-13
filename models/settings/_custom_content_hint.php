<hr/>
<p><?php echo trans('renick.robots::lang.settings.custom_content.hint'); ?></p>

<script>
    addEventListener('ajax:before-send', function(event) {
        const { handler } = event.detail.context;
        if (handler !== 'onSave') return;

        setTimeout(function () {
            window.location.reload();
        }, 1000);
    });
</script>
