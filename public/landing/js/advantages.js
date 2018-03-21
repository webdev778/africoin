
var type = 1, //circle type - 1 whole, 0.5 half, 0.25 quarter
  radius = ['25em','32em','37em','35em','25em','25em','35em','37em','32em'] //distance from center
  start = -90, //shift start from 0
  $elements = $('.advantages__el:not(:first-child)'),
  numberOfElements = (type === 1) ?  $elements.length : $elements.length - 1, //adj for even distro of elements when not full circle
  slice = 360 * type / numberOfElements;

$elements.each(function(i) {
  var $self = $(this),
    rotate = slice * i + start,
    rotateReverse = rotate * -1;

  $self.css({
    'transform': 'rotate(' + rotate + 'deg) translate(' + radius[i] + ') rotate(' + rotateReverse + 'deg)'
  });
});