# my-pwp

## PWP Milestone 1 Feedback
Excellent work on Milestone 1! Your purpose, audience, goal, persona, and use case are all very clear and descriptive. Your HTML is formatted very well and adheres to our style guide.

Your Milestone 1 Passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric). Information regarding milestone 2 can be found in the [Milestone 2 Documentation](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two).

### Edits &amp; Suggestions

- The only thing I noticed was that you have an extraneous `<footer>` tag sitting at the bottom of your document that you can safely delete if you're not going to use it.

## PWP Milestone 2&alpha; Feedback
Excellent job on the wireframes! I think a one page layout is a very appropriate choice for PWP. For a one-page layout, definitely keep your content on the shorter/lighter side, and keep the design choices clean and minimal. One page layouts have a tendency to become overwhelmed with too much information fast - and the best one-page designs veer towards minimalism and a sophisticated use of empty space. I think that this is very do-able based on what you have in your content strategy, but if you find that your About Me section grows beyond 2 about paragraphs or so, or you have perhaps more than 6 items in your Portfolio, perhaps consider creating separate pages.

**Home Page**: If you plan to feature a top nav on your full-screen layout, I'm not sure that additional calls to action below that direct users to the other regions of your page would be necessary. A call to action to scroll down **may** be useful on the mobile layout since the navigation will be hidden in the "drawer". Be cautious about featuring too many calls to action in your UI design as it can be visually overwhelming to the user. I like the idea of a drawer menu on mobile and a fixed header on full screens. Bear in mind that this will require some customization of the Bootstrap navbar. (We'll cover [Bootstrap](http://getbootstrap.com/) soon!)

**About Me**: Keep this content on the brief side as mentioned above.

**Portfolio**: There is a great, very easy to implement jQuery gallery called [Swipebox](http://brutaldesign.github.io/swipebox/) that past students have had success with. The documentation is a little light, but it is fairly easy to use.

**Footer**: [FontAwesome](http://fontawesome.io/) will have your social media icons covered!

You're way ahead of the curve here, and you can use the extra time between front-end lectures to refine your design choices and create your content so you're not losing any time as we still have yet to cover CSS and [Bootstrap](http://getbootstrap.com/). Nice HTML - it's perfect. Your Milestone 1 passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Nice work!

## PWP Milestone 2&beta; Feedback &amp; Suggestions

### Fixed navbar

Use `navbar-fixed-top` to fix your navbar to the top of the page. You'll have to restyle it a little bit (e.g. a `background-color` so that the text is legible), and you may want to put a `container` or `container-fluid` in the navbar so that the text isn't on the edge of the screen. Go to the [bootstrap navbar documentation](http://getbootstrap.com/components/#navbar) for more information.

### Sticky Footer

Your `sfooter-content` element needs to contain all of your content (minus the footer). You can also think about either removing your `main` tag or replacing your `sfooter-content` div with it.

### Bigger sections

You can wrap your sections in a `div` with the style `min-height: 100vh;`. This will make your sections have a minimum height of the browser window's height. This makes even small sections look big! This is a great thing to abuse if you don't have too much content, but don't want to look like you don't have too much content.

### Project Images

Take a look at [Swipebox](http://brutaldesign.github.io/swipebox/) for your project image gallery.

### Flexbox

You can use this code (shamelessly stolen from Rochelle) to create equal height columns.

```
/********************************************
* Flexbox Column Height Control
* Equal height content boxes using Flexbox CSS
*
* Author: rlewis37
********************************************/

/*
* add the class "row-flex" to each row that
* houses columns that need to be equal height
*
* this example is set to work on the MD breakpoint
* adjust @media query min-width if necessary
*/

.row-flex > div[class*="col-"] {
	margin-bottom: 5px;
}

/* use the min-width of the appropriate breakpoint (this is set on md and lg)*/
@media only screen and (min-width: 992px) {
	.row-flex {
		display: flex;
		flex: 1 1 auto;
		-webkit-flex-flow: row wrap;
		align-content: flex-start;
	}

	.row-flex > div[class*="col-"] {
		display: flex;
		flex: 1 1 auto;
		margin: -.2px;
	}
}
```

### Fixed Image

The background image on your jumbotron is using `fixed`, which is good in theory, but can cause framerate problems. I'd tackle this one last since it has the least amount of impact on your PWP, but here is a potential fix.

This adds a `before` pseudo-element to your jumbotron that contains the image, and uses `fixed` positioning to stick it in the top left corner of the site.

You'll want to add a background to your other sections or else this image will show behind everything.

```
.jumbotron {
	background: none;
	overflow: hidden;
	position: relative;
}

.jumbotron::before {
	content: ' ';
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	background: url(../images/laptop-desk.jpg) no-repeat center center;
	background-size: cover;
	will-change: transform;
	z-index: -1;
}
```
