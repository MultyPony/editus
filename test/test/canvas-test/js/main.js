const LIMIT = 39;


var canvasLeft = new fabric.Canvas('left-canvas', {
    width: 435,
    height: 645,
    backgroundColor: 'rgb(255,255,255)',
    selectionLineWidth: 2
});

var canvasMiddle = new fabric.Canvas('middle-canvas', {
    width: 100,
    height: 645,
    backgroundColor: 'rgb(255,255,255)',
    selectionLineWidth: 2
});

var canvasRight = new fabric.Canvas('right-canvas', {
    width: 435,
    height: 645,
    backgroundColor: 'rgb(255,255,255)',
    selectionLineWidth: 2
});



var rect = new fabric.Rect({
    left: 100,
    top: 100,
    fill: 'red',
    width: 100,
    height: 100,
    // angle: 45
});

var rect2 = new fabric.Rect({
    left: 100,
    top: 100,
    fill: 'red',
    width: 100,
    height: 100,
    // angle: 45
});

let text = new fabric.IText('Ваш текст', {
    left: 100,
    top: 100,
});
canvasLeft.add(text);
// canvasRight.add(text);
// canvasMiddle.add(text);

canvasLeft.add(rect);
canvasRight.add(rect2);

canvasLeft.on('object:moving', function (e) {
    var obj = e.target;
    // if object is too big ignore
    var width = obj.width * obj.scaleX;
    var height = obj.height * obj.scaleY;

    if (height > obj.canvas.height - 80 || width > obj.canvas.width - 100) {
        obj.width = width / obj.scaleX;
        obj.height = height / obj.scaleY;
        obj.scaleX = 1;
        obj.scaleY = 1;
        canvas.requestRenderAll();
        return;
    }
    obj.setCoords();

    // top corner
    if (obj.getBoundingRect().top < LIMIT) {
        obj.top = Math.max(obj.top, obj.top - obj.getBoundingRect().top) + LIMIT;
    }
    // left  corner
    if (obj.getBoundingRect().left < LIMIT) {
        obj.left = Math.max(obj.left, obj.left - obj.getBoundingRect().left) + LIMIT;
    }
    // bot corner
    if ((obj.getBoundingRect().top + obj.getBoundingRect().height) + LIMIT > obj.canvas.height ) {
        obj.top = Math.min(obj.top, obj.canvas.height - obj.getBoundingRect().height + obj.top - obj.getBoundingRect().top) - LIMIT;
    }

    // right corner
    if ((obj.getBoundingRect().left + obj.getBoundingRect().width) + LIMIT > obj.canvas.width) {
        obj.left = Math.min(obj.left, obj.canvas.width - obj.getBoundingRect().width + obj.left - obj.getBoundingRect().left) ;
    }
});

canvasRight.on('object:moving', function (e) {
    var obj = e.target;
    // if object is too big ignore
    var width = obj.width * obj.scaleX;
    var height = obj.height * obj.scaleY;

    if (height > obj.canvas.height - 80 || width > obj.canvas.width - 100) {
        obj.width = width / obj.scaleX;
        obj.height = height / obj.scaleY;
        obj.scaleX = 1;
        obj.scaleY = 1;
        canvas.requestRenderAll();
        return;
    }
    obj.setCoords();

    // top corner
    if (obj.getBoundingRect().top < LIMIT) {
        obj.top = Math.max(obj.top, obj.top - obj.getBoundingRect().top) + LIMIT;
    }
    // left  corner
    if (obj.getBoundingRect().left < LIMIT) {
        obj.left = Math.max(obj.left, obj.left - obj.getBoundingRect().left) + LIMIT;
    }
    // bot corner
    if ((obj.getBoundingRect().top + obj.getBoundingRect().height) + LIMIT > obj.canvas.height ) {
        obj.top = Math.min(obj.top, obj.canvas.height - obj.getBoundingRect().height + obj.top - obj.getBoundingRect().top) - LIMIT;
    }

    // right corner
    if ((obj.getBoundingRect().left + obj.getBoundingRect().width) + LIMIT > obj.canvas.width) {
        obj.left = Math.min(obj.left, obj.canvas.width - obj.getBoundingRect().width + obj.left - obj.getBoundingRect().left) ;
    }
});

$('.canvas-container').append('<div class="top-red"></div>');
$('.canvas-container').append('<div class="left-red"></div>');
$('.canvas-container').append('<div class="bottom-red"></div>');

$('.canvas-container').append('<div class="top-gray"></div>');
$('.canvas-container').append('<div class="left-gray"></div>');
$('.canvas-container').append('<div class="right-gray"></div>');
$('.canvas-container').append('<div class="bottom-gray"></div>');