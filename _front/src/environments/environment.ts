export const environment = {
  production: false,
  api: {
    protocol: 'http',
    host: 'fitmapp.dev.br',
    get url() {
      return `${ this.protocol }://${ this.host }`;
    }
  }
};
