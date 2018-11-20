$=jQuery;
import Animation from './Animation.js';

$(document).ready(function () {

  $('body').addClass('sexy-animations');

// Array of elements to animate
  const animationsElements = [
    {className: '.front-page-1', animation: 'wp-fadeInUp', delay: 'wp-delay-500'},
    {className: '.services article', animation: 'wp-fadeInUp', delay: 'wp-delay-500'}
  ];

  const animate = new Animation(animationsElements);

  animate.startAnimation();
});
