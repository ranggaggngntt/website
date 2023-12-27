document.addEventListener('DOMContentLoaded', function () {
    
    const skillbars = document.querySelectorAll('.skillbar');

    const tl = horizontalLoop(skillbars, {
      repeat: -1,
      speed: 1 * 0.5,
      reversed: false,
      paddingRight: parseFloat(gsap.getProperty(skillbars[0], 'paddingRight', 'px')),
    });

    let ts = 1;
  
    document.getElementById('skills').addEventListener('mouseenter', () => {
      ts = ts == -1 ? 1 : -1;
      gsap.to(tl, { timeScale: 0, overwrite: true });
    });
  
    document.getElementById('skills').addEventListener('mouseleave', () => {
      gsap.to(tl, { timeScale: ts, overwrite: true });
    });

function horizontalLoop(items, config) {
    items = gsap.utils.toArray(items);
    config = config || {};
    let tl = gsap.timeline({
      repeat: config.repeat,
      paused: config.paused,
      defaults: { ease: "none" },
      onReverseComplete: () =>
        tl.totalTime(tl.rawTime() + tl.duration() * 100),
    });
    let length = items.length;
    let startX = items[0].offsetLeft;
    let times = [];
    let widths = [];
    let xPercents = [];
    let curIndex = 0;
    let pixelsPerSecond = (config.speed || 1) * 100;
    let snap =
      config.snap === false
        ? (v) => v
        : gsap.utils.snap(config.snap || 1);
    let totalWidth;
    let curX;
    let distanceToStart;
    let distanceToLoop;
    let item;
    let i;
  
    gsap.set(items, {
      xPercent: (i, el) => {
        let w = (widths[i] = parseFloat(
          gsap.getProperty(el, "width", "px")
        ));
        xPercents[i] = snap(
          (parseFloat(gsap.getProperty(el, "x", "px")) / w) * 100 +
            gsap.getProperty(el, "xPercent")
        );
        return xPercents[i];
      },
    });
  
    gsap.set(items, { x: 0 });
  
    totalWidth =
      items[length - 1].offsetLeft +
      (xPercents[length - 1] / 100) * widths[length - 1] -
      startX +
      items[length - 1].offsetWidth *
        gsap.getProperty(items[length - 1], "scaleX") +
      (parseFloat(config.paddingRight) || 0);
  
    for (i = 0; i < length; i++) {
      item = items[i];
      curX = (xPercents[i] / 100) * widths[i];
      distanceToStart = item.offsetLeft + curX - startX;
      distanceToLoop =
        distanceToStart + widths[i] * gsap.getProperty(item, "scaleX");
  
      tl.to(
        item,
        {
          xPercent: snap(((curX - distanceToLoop) / widths[i]) * 100),
          duration: distanceToLoop / pixelsPerSecond,
        },
        0
      )
        .fromTo(
          item,
          {
            xPercent: snap(
              ((curX - distanceToLoop + totalWidth) / widths[i]) * 100
            ),
          },
          {
            xPercent: xPercents[i],
            duration:
              (curX - distanceToLoop + totalWidth - curX) / pixelsPerSecond,
            immediateRender: false,
          },
          distanceToLoop / pixelsPerSecond
        )
        .add("label" + i, distanceToStart / pixelsPerSecond);
  
      times[i] = distanceToStart / pixelsPerSecond;
    }
  
    function toIndex(index, vars) {
      vars = vars || {};
      Math.abs(index - curIndex) > length / 2 &&
        (index += index > curIndex ? -length : length);
  
      let newIndex = gsap.utils.wrap(0, length, index);
      let time = times[newIndex];
  
      if (time > tl.time() !== index > curIndex) {
        vars.modifiers = { time: gsap.utils.wrap(0, tl.duration()) };
        time += tl.duration() * (index > curIndex ? 1 : -1);
      }
  
      curIndex = newIndex;
      vars.overwrite = true;
      return tl.tweenTo(time, vars);
    }
  
    tl.next = (vars) => toIndex(curIndex + 1, vars);
    tl.previous = (vars) => toIndex(curIndex - 1, vars);
    tl.current = () => curIndex;
    tl.toIndex = (index, vars) => toIndex(index, vars);
    tl.times = times;
  
    if (config.reversed) {
      tl.vars.onReverseComplete();
      tl.reverse();
    }
  
    return tl;
  }

    setTimeout(() => tl.play(), 1500);
  });
  