"use strict";

Rectangle.prototype.area = funtion () {
    return (this.w * this.h);
}

class Square extends Rectangle {
    constructor(s) {
        super(s,s);
    }
}