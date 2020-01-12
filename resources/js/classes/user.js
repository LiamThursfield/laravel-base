/**
 * Create a User class to allow easy authentication checks
 */

module.exports = class {
    constructor(user) {
        this.id = user && user.id ? user.id : undefined;
        this.name = user && user.name ? user.name : undefined;
        this.email = user && user.email ? user.email : undefined;
    }

    isAuthenticated() {
        return this.id !== undefined;
    }

    isGuest() {
        return this.id === undefined;
    }
};