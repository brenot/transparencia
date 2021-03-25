/**
 * Arquivo geral de fun��es para manipula��o de eventos.
 *
 */

/**
 * Faz a chama da para a pesquisa
 */
app.bus.subscribe('*.pesquisa', app.actions.search)
