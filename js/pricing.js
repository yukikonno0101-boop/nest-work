const PLAN_RATES = { hourly: 550, dailyCap: 2200, light: 8800, lightDays: 8, full: 16500 };
function calculatePlanCosts(days, hours) {
  if (!Number.isInteger(days) || days < 1 || days > 31 || !Number.isInteger(hours) || hours < 1 || hours > 12) return null;
  const daily = Math.min(hours * PLAN_RATES.hourly, PLAN_RATES.dailyCap);
  return [
    { name: 'ドロップイン', cost: daily * days },
    { name: '月額ライト', cost: PLAN_RATES.light + Math.max(0, days - PLAN_RATES.lightDays) * daily },
    { name: '月額フルタイム', cost: PLAN_RATES.full }
  ];
}
const pricingForm = document.querySelector('#pricing-form');
const pricingResult = document.querySelector('#pricing-result');
if (pricingForm && pricingResult) {
  const updatePricing = () => {
    if (!pricingForm.reportValidity()) return;
    const days = Number(pricingForm.elements.days.value);
    const hours = Number(pricingForm.elements.hours.value);
    const costs = calculatePlanCosts(days, hours);
    if (!costs) { pricingResult.textContent = '日数は1〜31日、時間は1〜12時間の整数で入力してください。'; return; }
    const min = Math.min(...costs.map(plan => plan.cost));
    const names = costs.filter(plan => plan.cost === min).map(plan => plan.name).join('・');
    const yen = value => value.toLocaleString('ja-JP') + '円';
    pricingResult.replaceChildren();
    const summary = document.createElement('p');
    summary.className = 'result-summary';
    summary.textContent = costs.filter(plan => plan.cost === min).length > 1 ? names + 'が同額で最安です。' : names + 'が最もお得です。';
    const list = document.createElement('dl'); list.className = 'result-costs';
    costs.forEach(plan => {
      const row = document.createElement('div');
      const name = document.createElement('dt'); name.textContent = plan.name;
      const amount = document.createElement('dd'); amount.textContent = yen(plan.cost);
      row.append(name, amount); list.append(row);
    });
    const condition = document.createElement('p'); condition.className = 'result-condition';
    condition.textContent = '月' + days + '日 × 1日' + hours + '時間の利用目安（税込）。';
    pricingResult.append(summary, list, condition);
  };
  pricingForm.addEventListener('submit', event => {
    event.preventDefault();
    updatePricing();
  });
  updatePricing();
}
