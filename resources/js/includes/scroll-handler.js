/**
 * Scroll handler
 */
export const ScrollHandler = {
    cache: {
        ready: false,
        scrollY: 0,
        rafActive: false,
        rafId: null,
        callbacks: []
    },

    /**
     * Starts the scroll listener handler and registers an optional callback.
     *
     * @param { function(float) } callback
     */
    init: function (callback) {
        if (! this.cache.ready) {
            // Prime current position
            this.cache.scrollY = window.scrollY || window.pageYOffset;

            if (callback) {
                this.cache.callbacks.push(callback);
            }

            window.addEventListener('scroll', this.update.bind(this));
            this.cache.ready = true;
        }
    },

    update: function () {
        this.cache.scrollY = window.scrollY || window.pageYOffset;

        this.callAnimation();
    },

    callAnimation: function () {
        if (!this.cache.rafActive) {
            this.cache.rafActive = true;

            this.cache.rafId = requestAnimationFrame(this.updateAnimation.bind(this));
        }
    },

    updateAnimation: function () {
        for (let index = 0; index < this.cache.callbacks.length; index += 1) {
            this.cache.callbacks[index](this.cache.scrollY);
        }

        this.cache.rafActive = false;
    },

    /**
     * Get the currently scrolled distance.
     *
     * @returns float
     */
    getPosition: function () {
        return this.cache.scrollY;
    },

    /**
     * Registers a callback to be triggered when the page scrolls.
     * Callbacks should not use bind.
     * The callback will be immediately triggered if the immediate flag is set.
     * The callback receives the latest scrolled distance.
     *
     * @param { function(float) } callback
     * @param { boolean } immediate
     */
    addCallback: function (callback, immediate) {
        if (callback) {
            if (! this.cache.ready) {
                this.init(callback);
            } else {
                this.cache.callbacks.push(callback);
            }

            if (immediate) {
                callback(this.cache.scrollY);
            }
        }
    },

    /**
     * Removes a callback previously registered.
     *
     * @param { function } callback
     */
    removeCallback: function (callback) {
        if (callback && this.cache.ready) {
            for (let index = 0; index < this.cache.callbacks.length; index += 1) {
                if (this.cache.callbacks[index] === callback) {
                    this.cache.callbacks.splice(index, 1);
                }
            }
        }
    }
};
