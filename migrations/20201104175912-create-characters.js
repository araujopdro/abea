'use strict';
module.exports = {
  up: async (queryInterface, Sequelize) => {
    await queryInterface.createTable('Characters', {
      id: {
        allowNull: false,
        autoIncrement: true,
        primaryKey: true,
        type: Sequelize.INTEGER
      },
      nome: {
        type: Sequelize.STRING
      },
      idade: {
        type: Sequelize.INTEGER
      },
      nacionalidade: {
        type: Sequelize.STRING
      },
      miscigenacao: {
        type: Sequelize.STRING
      },
      caracteristicas: {
        type: Sequelize.STRING
      },
      resistencia: {
        type: Sequelize.INTEGER
      },
      crit: {
        type: Sequelize.INTEGER
      },
      def_passiva: {
        type: Sequelize.INTEGER
      },
      def_ativa: {
        type: Sequelize.INTEGER
      },
      energia: {
        type: Sequelize.INTEGER
      },
      habilidades: {
        type: Sequelize.STRING
      },
      pontos_de_habilidade: {
        type: Sequelize.INTEGER
      },
      dinheiro: {
        type: Sequelize.INTEGER
      },
      bens: {
        type: Sequelize.STRING
      },
      armas: {
        type: Sequelize.STRING
      },
      historia: {
        type: Sequelize.TEXT
      },
      createdAt: {
        allowNull: false,
        type: Sequelize.DATE
      },
      updatedAt: {
        allowNull: false,
        type: Sequelize.DATE
      }
    });
  },
  down: async (queryInterface, Sequelize) => {
    await queryInterface.dropTable('Characters');
  }
};
