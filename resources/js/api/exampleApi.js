import api from '../../index';

export default {
  index(params) {
    return api({
      method: 'get',
      url: '/example',
      params,
    });
  },
};
