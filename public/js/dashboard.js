/******/ (() => { // webpackBootstrap
/*!***********************************!*\
  !*** ./resources/js/dashboard.js ***!
  \***********************************/
var games_played_by_year = new Chartisan({
  el: '#games_played_by_year',
  url: "games_played_by_year",
  loader: {
    color: '#247ba0',
    size: [30, 30],
    type: 'bar',
    textColor: '#000000',
    text: 'Зареждам данни...'
  },
  error: {
    color: '#247ba0',
    size: [30, 30],
    text: 'Възникна грешка...',
    textColor: '#247ba0',
    type: 'general',
    debug: false
  },
  hooks: new ChartisanHooks().colors(['#FF5733', '#4299E1', '#ECC94B', '#3EBD2F', '#33FFCE', '#334CFF', '#8A33FF', '#FF33D4', '#FF336E']).legend(true).tooltip(true)
});
var top_scores = new Chartisan({
  el: '#top_scores',
  url: "top_scores",
  loader: {
    color: '#247ba0',
    size: [30, 30],
    type: 'bar',
    textColor: '#000000',
    text: 'Зареждам данни...'
  },
  error: {
    color: '#247ba0',
    size: [30, 30],
    text: 'Възникна грешка...',
    textColor: '#247ba0',
    type: 'general',
    debug: false
  },
  hooks: new ChartisanHooks().colors(['#FF5733', '#4299E1', '#ECC94B', '#3EBD2F', '#33FFCE', '#334CFF', '#8A33FF', '#FF33D4', '#FF336E']).legend(true).tooltip(true)
});
var worst_scores = new Chartisan({
  el: '#worst_scores',
  url: "worst_scores",
  loader: {
    color: '#247ba0',
    size: [30, 30],
    type: 'bar',
    textColor: '#000000',
    text: 'Зареждам данни...'
  },
  error: {
    color: '#247ba0',
    size: [30, 30],
    text: 'Възникна грешка...',
    textColor: '#247ba0',
    type: 'general',
    debug: true
  },
  hooks: new ChartisanHooks().colors(['#FF5733', '#4299E1', '#ECC94B', '#3EBD2F', '#33FFCE', '#334CFF', '#8A33FF', '#FF33D4', '#FF336E']).legend(true).tooltip(true)
});
var scores_by_year = new Chartisan({
  el: '#scores_by_year',
  url: "scores_by_year",
  loader: {
    color: '#247ba0',
    size: [30, 30],
    type: 'bar',
    textColor: '#000000',
    text: 'Зареждам данни...'
  },
  error: {
    color: '#247ba0',
    size: [30, 30],
    text: 'Възникна грешка...',
    textColor: '#247ba0',
    type: 'general',
    debug: true
  },
  hooks: new ChartisanHooks().colors(['#FF5733', '#4299E1', '#ECC94B', '#3EBD2F', '#33FFCE', '#334CFF', '#8A33FF', '#FF33D4', '#FF336E']).legend(true).tooltip(true)
});
var ranking_by_year = new Chartisan({
  el: '#ranking_by_year',
  url: "ranking_by_year",
  loader: {
    color: '#247ba0',
    size: [30, 30],
    type: 'bar',
    textColor: '#000000',
    text: 'Зареждам данни...'
  },
  error: {
    color: '#247ba0',
    size: [30, 30],
    text: 'Възникна грешка...',
    textColor: '#247ba0',
    type: 'general',
    debug: true
  },
  hooks: new ChartisanHooks().colors(['#FF5733', '#4299E1', '#ECC94B', '#3EBD2F', '#33FFCE', '#334CFF', '#8A33FF', '#FF33D4', '#FF336E']).legend(true).tooltip(true)
});
/******/ })()
;