import './bootstrap';
import '../fonts/Open_Sans/OpenSans-VariableFont_wdth,wght.ttf';
import '../fonts/Caveat/Caveat-VariableFont_wght.ttf';


(function () {
    console.log('Hello there :)')

    // Method added here to demonstrate vanillaJs
    const actionBtns = document.querySelectorAll('.btn--action');
    if (actionBtns) {
        // Would normally have this in an "actions" file to be imported as needed...
        let scrollToTarget = (el) => {
            if (el.dataset.actionTarget) {
                let target = document.getElementById(el.dataset.actionTarget)
                let tablist = target.querySelector('[role="tablist"]')


                target.scrollIntoView({ behavior: "smooth" })
                if (tablist) {
                    let tab = tablist.querySelector('[role="tabpanel"]')
                    tab.focus({focusVisible: true});
                }
            }
        }
        actionBtns.forEach(btn => {
            btn.addEventListener("click", function (ev) {
                scrollToTarget(btn)
            })
            btn.addEventListener("keyup", function (ev) {
                if (ev.key === "Enter") {
                    scrollToTarget(btn)
                }
            })
        });
    }
})();
