/*
 *
 * 	Simple spoiler v 2.0
 *	The styles in the file spoiler.less
 *
 */

let toggleSpoiler;
let bodySpoiler;
let items;
let heightSpoilerTitle;
let heightBodySpoiler;

export default function Spoiler() {
  const spoilers = document.querySelectorAll('[data-rmbt-spoiler]');

  spoilers.forEach(spoiler => {
    const state = spoiler.dataset.rmbtSpoiler;

    toggleSpoiler = spoiler.querySelectorAll('[data-rmbt-spoiler-toggle]')[0];
    bodySpoiler = spoiler.querySelectorAll('[data-rmbt-spoiler-body]')[0];
    items = bodySpoiler.querySelectorAll(':scope > [data-rmbt-spoiler-item]');
    heightSpoilerTitle = parseInt(getComputedStyle(spoiler).height.replace('px', ''));

    heightBodySpoiler = Array.from(items).reduce(
      (sum, item) => sum + item.getBoundingClientRect().height,
      0
    );

    if (state == 'open') {
      spoilerOpen(spoiler, 'rmbt-spoiler-open');
    } else if (state == 'close') {
      spoilerClose(spoiler, 'rmbt-spoiler-open');
    }

    toggleSpoiler.addEventListener('click', e => {
      if (spoiler.classList.contains('rmbt-spoiler-open')) {
        spoilerClose(spoiler, 'rmbt-spoiler-open');
      } else {
        spoilerOpen(spoiler, 'rmbt-spoiler-open');
      }
    });

    items.forEach(item => {
      const itemToggle = item.querySelector(':scope > [data-rmbt-item-toggle]');
      const itemBody = item.querySelector(':scope > [data-rmbt-item-body]');

      if (!itemBody || !itemToggle) {
        return;
      }

      const items = itemBody.querySelectorAll(':scope > [data-rmbt-spoiler-item]');

      const heightItem = getComputedStyle(item).height;
      const heightItemBody = Array.from(items).reduce(
        (sum, item) => sum + item.getBoundingClientRect().height,
        0
      );

      if (itemToggle && itemBody) {
        itemToggle.addEventListener('click', e => {
          if (item.classList.contains('rmbt-item-open')) {
            item.classList.remove('rmbt-item-open');
            itemBody.style.height = `${0}px`;
            item.style.height = `${heightItem}`;
          } else {
            item.classList.add('rmbt-item-open');
            itemBody.style.height = `${heightItemBody}px`;
            item.style.height = `${heightItemBody}px`;
          }
        });
      }
    });
  });
}

function spoilerOpen(spoiler, classOpen) {
  spoiler.classList.add(classOpen);
  spoiler.style.height = `${heightSpoilerTitle + heightBodySpoiler}px`;
}

function spoilerClose(spoiler, classOpen) {
  spoiler.classList.remove(classOpen);
  spoiler.style.height = `${heightSpoilerTitle}px`;
}




/*

<div class="rmbt-mh-catalog-sidebar" data-rmbt-spoiler="open">
	<div class="rmbt-mh-catalog-sidebar__main-title">
		<svg>
			<use xlink:href="./catalog/view/theme/militaryhub/image/sprite.svg#11_catalog"></use>
		</svg>
		<h4 class="rmbt-mh-catalog-sidebar__title-text">{{text_title}}</h4>
		<div class="rmbt-mh-catalog-sidebar__wrap-svg" data-rmbt-spoiler-toggle>
			<svg>
				<use xlink:href="./catalog/view/theme/militaryhub/image/sprite.svg#09_arrow"></use>
			</svg>
		</div>
	</div>
	<nav>
		<ul data-rmbt-spoiler-body>
			{% for category in categories %}
				<li class="rmbt-mh-catalog-sidebar__title" data-rmbt-spoiler-item>
					<a href="{{category.href}}">{{category.name}}</a>
					{% if category.children %}
						<div data-rmbt-item-toggle>
							<svg class="toggle-open">
								<use xlink:href="./catalog/view/theme/militaryhub/image/sprite.svg#31_minus"></use>
							</svg>
							<svg class="toggle-close">
								<use xlink:href="./catalog/view/theme/militaryhub/image/sprite.svg#32_plus"></use>
							</svg>
						</div>
						<ul data-rmbt-item-body>
							{% for child in category.children %}
								<li class="rmbt-mh-catalog-sidebar__item" data-rmbt-spoiler-item>
									<a href="{{child.href}}">{{child.name}}</a>
								</li>
							{% endfor %}
						</ul>
					{% endif %}
				</li>
			{% endfor %}
		</ul>
	</nav>
</div>


*/