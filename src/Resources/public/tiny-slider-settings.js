document.addEventListener("DOMContentLoaded", function(event) { 
  var e = document.querySelectorAll('.content-slider'), c, i
  for (i=0; i<e.length; i++) {
    c = e[i].getAttribute('data-config').split(',')
    let autoplay_setting = false
    let loop_setting = false
    let show_nav = false
    let slider_items = '1'
    let slider_items_resp = '1'
    let axis_setting = 'horizontal'
    let preventActionWhenRunning_setting = false
    let autoplayTimeout_setting = parseInt(c[0]) + parseInt(c[1])
    if ( parseInt(c[0]) >= 1 ) { autoplay_setting = true }
    if ( parseInt(c[0]) == 1 ) { 
      preventActionWhenRunning_setting = true
      autoplayTimeout_setting = '0'
    }
    if ( parseInt(c[3]) == 1 ) { loop_setting = true }
    if ( parseInt(c[4]) == 1 ) { show_nav = true }
    if ( !isNaN( parseInt(c[5]) ) ) { 
      if ( parseInt(c[5]) != '0' ) { slider_items = parseInt(c[5]) }
    }
    if ( parseInt(c[7]) == 1 ) { axis_setting = 'vertical' }
    if ( parseInt(c[8]) >= 0 ) { slider_items_resp = parseInt(c[8]) }
    
      var slider = tns({
      container: e[i].firstElementChild,
      slideBy: 'page',
      mode: c[6],
      nav: show_nav,
      navPosition: 'bottom',
      //navContainer:'.tns-thumbs .slider-wrapper',
      //navAsThumbnails: true,
      arrowKeys: true,
      speed: parseInt(c[1]),
      autoplay: autoplay_setting,
      autoplayTimeout: autoplayTimeout_setting,
      autoplayButtonOutput: false,
      loop: loop_setting,
      startIndex: parseInt(c[2]),
      axis: axis_setting,
      preventActionWhenRunning: preventActionWhenRunning_setting,
      items: slider_items_resp,
      responsive: {
        1024: {
          items: slider_items,
        }
      }
    })
  }
})