
const counters =
  document.querySelectorAll(
    ".counter-value"
  );
const speed = 200;

counters.forEach((counter) => {
  const animate = () => {
    const value =
      +counter.getAttribute("akhi");
    const data = +counter.innerText;

    const time = value / speed;
    if (data < value) {
      counter.innerText = Math.ceil(
        data + time
      );
      const delayed =
        parseInt(value) > 1000 ? 1 : 10;
      setTimeout(animate, delayed);
    } else {
      counter.innerText = value;
    }
  };

  animate();
});
