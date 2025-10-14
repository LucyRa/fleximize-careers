<div class="breadcrumbs" x-data="{
    visible: true,
    toggleOnScroll() {
        if (window.scrollY >= 200 && this.visible) {
            this.visible = false;
        }

        if (window.scrollY <= 500 && !this.visible) {
            this.visible = true;
        }
    }
}" @scroll.window="toggleOnScroll" x-show="visible" x-transition.duration.500ms x-transition.opacity>
    <ul>
        <li><a href="" class="icon-round"><x-icons.house-chimney-full color="#DAF1FA" /></a></li>
        <li>About us</li>
        <li>Careers</li>
    </ul>
</div>
