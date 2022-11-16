const Perlin = function(x, y, z) {
  for (var p = new Array(512), permutation = [151, 160, 137, 91, 90, 15, 131, 13, 201, 95, 96, 53, 194, 233, 7, 225, 140, 36, 103, 30, 69, 142, 8, 99, 37, 240, 21, 10, 23, 190, 6, 148, 247, 120, 234, 75, 0, 26, 197, 62, 94, 252, 219, 203, 117, 35, 11, 32, 57, 177, 33, 88, 237, 149, 56, 87, 174, 20, 125, 136, 171, 168, 68, 175, 74, 165, 71, 134, 139, 48, 27, 166, 77, 146, 158, 231, 83, 111, 229, 122, 60, 211, 133, 230, 220, 105, 92, 41, 55, 46, 245, 40, 244, 102, 143, 54, 65, 25, 63, 161, 1, 216, 80, 73, 209, 76, 132, 187, 208, 89, 18, 169, 200, 196, 135, 130, 116, 188, 159, 86, 164, 100, 109, 198, 173, 186, 3, 64, 52, 217, 226, 250, 124, 123, 5, 202, 38, 147, 118, 126, 255, 82, 85, 212, 207, 206, 59, 227, 47, 16, 58, 17, 182, 189, 28, 42, 223, 183, 170, 213, 119, 248, 152, 2, 44, 154, 163, 70, 221, 153, 101, 155, 167, 43, 172, 9, 129, 22, 39, 253, 19, 98, 108, 110, 79, 113, 224, 232, 178, 185, 112, 104, 218, 246, 97, 228, 251, 34, 242, 193, 238, 210, 144, 12, 191, 179, 162, 241, 81, 51, 145, 235, 249, 14, 239, 107, 49, 192, 214, 31, 181, 199, 106, 157, 184, 84, 204, 176, 115, 121, 50, 45, 127, 4, 150, 254, 138, 236, 205, 93, 222, 114, 67, 29, 24, 72, 243, 141, 128, 195, 78, 66, 215, 61, 156, 180], i = 0; i < 256; i++) p[256 + i] = p[i] = permutation[i];
  var X = 255 & Math.floor(x),
    Y = 255 & Math.floor(y),
    Z = 255 & Math.floor(z);
  x -= Math.floor(x), y -= Math.floor(y), z -= Math.floor(z);
  var u = fade(x),
    v = fade(y),
    w = fade(z),
    A = p[X] + Y,
    AA = p[A] + Z,
    AB = p[A + 1] + Z,
    B = p[X + 1] + Y,
    BA = p[B] + Z,
    BB = p[B + 1] + Z;
  return scale(lerp(w, lerp(v, lerp(u, grad(p[AA], x, y, z), grad(p[BA], x - 1, y, z)), lerp(u, grad(p[AB], x, y - 1, z), grad(p[BB], x - 1, y - 1, z))), lerp(v, lerp(u, grad(p[AA + 1], x, y, z - 1), grad(p[BA + 1], x - 1, y, z - 1)), lerp(u, grad(p[AB + 1], x, y - 1, z - 1), grad(p[BB + 1], x - 1, y - 1, z - 1)))))
};

function fade(t) {
  return t * t * t * (t * (6 * t - 15) + 10)
}

function lerp(t, a, b) {
  return a + t * (b - a)
}

function grad(hash, x, y, z) {
  var h = 15 & hash,
    u = h < 8 ? x : y,
    v = h < 4 ? y : 12 == h || 14 == h ? x : z;
  return (0 == (1 & h) ? u : -u) + (0 == (2 & h) ? v : -v)
}

function scale(n) {
  return (1 + n) / 2
}
class Graphics {
  constructor(el) {
    this.DOM = {
        el: el
      },
      this.size = {},
      this.density = 10,
      this.smoothness = 5,
      this.time = 0,
      this.initCanvas(),
      this.initGradient(),
      this.addIntersection(),
      this.initEvents(),
      this.render()
  }
  initCanvas() {
    this.canvas = document.createElement("canvas"),
      this.resize(),
      this.DOM.el.appendChild(this.canvas)
  }
  initGradient() {
    this.DOM.el.hasAttribute("data-color") ? this.gradient = this.DOM.el.getAttribute("data-color") : (this.gradient = this.ctx.createLinearGradient(0, 0, this.DOM.el.clientWidth, 0),
      this.gradient.addColorStop(.24, "#5557D2"),
      this.gradient.addColorStop(.43, "#B73096"),
      this.gradient.addColorStop(.52, "#C82461"),
      this.gradient.addColorStop(.64, "#DA3054"),
      this.gradient.addColorStop(.77, "#D77439"),
      this.gradient.addColorStop(.89, "#E5B43B"))
  }
  addIntersection() {
    this.observer = new IntersectionObserver(entries => {
      entries.forEach(entry => this.isVisible = entry.intersectionRatio > 0)
    }), this.observer.observe(this.DOM.el)
  }
  initEvents() {
    window.addEventListener("resize", this.resize.bind(this))
  }
  resize() {
    this.size.width = this.DOM.el.clientWidth,
      this.size.height = this.DOM.el.clientHeight,
      this.canvas.width = this.size.width,
      this.canvas.height = this.size.height,
      this.spacer = (this.size.height - .21 * this.size.width) / this.density, this.ctx = this.canvas.getContext("2d"),
      this.ctx.lineWidth = 1,
      this.initGradient()
  }
  draw() {
    this.ctx.clearRect(0, 0, this.size.width, this.size.height);
    for (let j = 0; j < this.density; j++) {
      this.ctx.beginPath();
      for (let i = 0; i < this.size.width; i += this.smoothness) this.ctx.lineTo(i, j * this.spacer + this.size.width / 4 * Perlin(2 * i / this.size.width + this.time / 200, j / 100 + this.time / 400, 0));
      this.ctx.strokeStyle = this.gradient, this.ctx.stroke()
    }
  }
  render() {
    this.isVisible && (this.time++, this.draw()), window.requestAnimationFrame(this.render.bind(this))
  }
}
new Graphics(document.getElementById("graphics"));