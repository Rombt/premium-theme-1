export class NimarimChain {
  constructor(target) {
    this.target = target;
    this.queue = [];
    this._stopped = false;
  }

  use(effect, options = {}) {
    this.queue.push(async () => {
      if (this._stopped) return;
      await effect(this.target, options);
    });
    return this;
  }

  wait(duration = 500) {
    this.queue.push(async () => {
      if (this._stopped) return;
      await new Promise(r => setTimeout(r, duration));
    });
    return this;
  }

  do(fn) {
    this.queue.push(async () => {
      if (this._stopped) return;
      await fn(this.target);
    });
    return this;
  }

  stop() {
    this._stopped = true;
  }

  async play(loop = false) {
    do {
      for (const action of this.queue) {
        if (this._stopped) return;
        await action();
      }
    } while (loop && !this._stopped);
  }
}
