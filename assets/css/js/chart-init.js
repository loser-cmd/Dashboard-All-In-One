document.addEventListener("DOMContentLoaded", function(){
  const ctx = document.getElementById('chartAnggaran');
  if(!ctx) return;

  new Chart(ctx, {
    type: 'bar',
    data: window.chartData,
    options: { responsive:true }
  });
});

