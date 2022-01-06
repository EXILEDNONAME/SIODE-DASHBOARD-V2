<script> var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview/"; </script>
<script>
var KTAppSettings =
{
  "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 },
  "font-family": "Poppins"
};
</script>
<script src="/assets/backend/plugins/global/plugins.bundle.js?v=7.0.5"></script>
<script src="/assets/backend/js/scripts.bundle.js?v=7.0.5"></script>
<script>
$(".change").click(function() {
  var id = $(this).data("id");

  var success = '';
  var failed = '';
  $.ajax({
    url: "/dashboard/notification/read/" + id,
    type: 'get',
    dataType: "JSON",
    data: {
      "id": id,
      "_token": "{{ csrf_token() }}",
    },
    success: function() {
      $('#alert-message').html(success);
    }
  });

  $('#alert-message').html(failed);
});
</script>

@stack('js')
