---
extends: _layouts.post
title: Why those colors?
subtitle: Is it red, is  it green? It's both
author: Johannes Berdin
date: 2018-03-26
section: content
footnotes:
- For a Deutan the Reds and Greens can’t be distinguished very well
- How to make figures and presentations that are friendly to Colorblind / http://jfly.iam.u-tokyo.ac.jp/color/
- The matrix holds the fractions representing the shift of the visible color spectrum towards the white point
- The number will show as an hexadecimal value (0123456789abcdef)
---

After publishing my website a lot of friends and family asked me why I did choose those "ugly" colors. They said the website is "moltey" and the colors "do not match". I like those colors but I also want that my visitors are not bothered by my sense of beauty. So let me try to explain what's probably wrong with those colors.

First things first, I am one of 6% of the male population with red-green color anomaly better known as [Deuteranomaly](#fn). There are sufficient articles on the web about the human vision, the three classes of cones and all kinds of biological explanations about color blindness:

-   A pretty good article about design for better color accessibility: <http://blog.usabilla.com/how-to-design-for-color-blindness/>
-   Data visualization often confuses color-blind people: <https://venngage.com/blog/color-blind-friendly-palette/>
-   Asana is a role model for user experience and accessibility: <https://blog.asana.com/2017/01/new-accessibility-feature-colorblind-friendly/>

For my website I choose the following color palette:

### Colors

<div class="row">
<div class="col-md-2 watch watch-blue">#B60CE8</div>
<div class="col-md-2 watch watch-orange">#FF710D</div>
<div class="col-md-2 watch watch-pink">#F50066</div>
<div class="col-md-2 watch watch-light">#E8E8EE</div>
<div class="col-md-2 watch watch-white">#FFFFFF</div>
<div class="col-md-2 watch watch-grey">#333333</div>
</div>

For finding this color scheme I used [Adobe Color CC](https://color.adobe.com/johannesberdinde-color-theme-10629936/) - formerly known as Kuler. I did not made any research on color theory or similar I just wanted colors I like. We have a blue, orange, pink and a light shade of grey and two main colors plain white and dark grey.

## Perception

The following random generator paints how color perception could change. You can switch the anomaly to get a sense on different types of color blindness:

<form>
<div class="row">
<div class="col-md-4">
<select name="color-blind-select" class="color-blind-select">
  <option value="1">protanomaly</option>
  <option value="2">protanopia</option>
  <option value="3">deuteranomaly</option>
  <option value="4">deuteranopia</option>
  <option value="5">tritanomaly</option>
  <option value="6">tritanopia</option>
  <option value="7">achromatomaly</option>
  <option value="8">achromatopsia</option>
</select>
</div>
<div class="col-md-8 color-blind-explanation"></div>
</div>
<div class="row">
<div class="col-md-6 watch color-blind-watch">loading</div>
<div class="col-md-6 watch color-blind-result-watch">loading</div>
</div>
</form>

### Code

I found the brilliant npm package [color-blind](https://npmjs.org/package/color-blind) by [@skratchdot](https://github.com/skratchdot). The scripts emulate the 8 common types of color blindness by applying a [confusion matrix](#fn) to the RGB space.

To generate a random hex value we do some basic math. You can pick a value from 0 to 256 for each of the additive colors red, green and blue thus there are <code>256x256x256=16777216</code> possibilities for a RGB color. We multiply the number of combinations with a random number from 0 to 1, transform the numeric value to a [base 16](#fn) representation and take just 6 positions, that's it:

<script src="https://gist.github.com/johannesberdin/89715ec4b1da475ecc10a12e1b0714f8.js"></script>

By using a simple interval we generate a random hex value every second and pass it to the <code>colorBlindFn</code> function which takes the selected anomaly transformation of the color-blind library to calculate the corresponding color.

<script src="https://gist.github.com/johannesberdin/7cef1510dd90f73d26166c0e980c2517.js"></script>

This is just a small calculated comparsion of regular and impaired vision but I hope people are able to emphatize with color blindness.

During writing this article I started realizing that there are a lot of situations where I'm not able to distinguish colors, e.g. it's pretty hard to see the difference in syntax highlighting of Visual Studio for Mac.
<img class="img-sm img-responsive" src="{{ $page->baseUrl }}/img/2/syntax-highlighting-visual-studio.png" alt="Syntax highlighting Visual Studio for Mac"/>

So I decided to start a collection of software, websites and stuff with a not-so-good color scheme and share them with you. Stay <span class="text-orange">c</span><span class="text-blue">o</span>l<span class="text-pink">o</span><span class="text-light">r</span><span class="text-orange">f</span><span class="text-blue">u</span><span class="text-pink">l</span>!

<script type="text/javascript">
var colorBlindWatch = $('.color-blind-watch');
var colorBlindExplanation = $('.color-blind-explanation');
var colorBlindResult = $('.color-blind-result-watch');

var randomColor = '#000000';

window.setInterval(function(){
    randomColor = '#'+ ('000000' + Math.floor(Math.random()*16777215).toString(16)).slice(-6);
    colorBlindFn(randomColor);
  }, 1000);

var colorBlindFn = function(color) {
  var anomaly = parseInt($('.color-blind-select').val());

  switch (anomaly) {
    case 1:
    explanation = "The viewer sees low amounts of red.";
    result = blinder.protanomaly(color);
    break;
    case 2:
    explanation = "The viewer sees no red.";
    result = blinder.protanopia(color);
    break;
    case 3:
    explanation = "The viewer sees low amounts of green.";
    result = blinder.deuteranomaly(color);
    break;
    case 4:
    explanation = "The viewer sees no green.";
    result = blinder.deuteranopia(color);
    break;
    case 5:
    explanation = "The viewer sees low amounts of blue.";
    result = blinder.tritanomaly(color);
    break;
    case 6:
    explanation = "The viewer sees no blue.";
    result = blinder.tritanopia(color);
    break;
    case 7:
    explanation = "The viewer sees low amounts of color at all.";
    result = blinder.achromatomaly(color);
    break;
    case 8:
    explanation = "The viewer sees no color.";
    result = blinder.achromatopsia(color);
    break;
  }

  colorBlindExplanation.text(explanation);

  colorBlindWatch.text(color);
  colorBlindWatch.css('background-color', color);

  colorBlindResult.text(result);
  colorBlindResult.css('background-color', result);
};
</script>