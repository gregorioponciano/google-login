<p align="center">
  <img src="https://img.shields.io/badge/Laravel-Socialite-FF2D20?style=for-the-badge&logo=laravel" alt="Laravel Socialite">
  <img src="https://img.shields.io/badge/Google-OAuth_2.0-4285F4?style=for-the-badge&logo=google&logoColor=white" alt="Google Login">
  <img src="https://img.shields.io/badge/Security-Authenticated-green?style=for-the-badge" alt="Security">
</p>

<h1 align="center">🔑 Laravel Google Login (Socialite)</h1>

<p align="center">
  <strong>Guia de implementação de autenticação social com Google utilizando o Laravel Socialite para um login rápido e seguro.</strong>
</p>

---

## 📝 Sobre o Projeto

Este repositório demonstra como integrar o **Google Login** em aplicações Laravel. O uso do **Laravel Socialite** simplifica o fluxo OAuth, permitindo que os usuários se autentiquem com suas contas Google, aumentando as taxas de conversão e simplificando o gerenciamento de senhas.

### ✨ Funcionalidades

* **🚀 Login com Um Clique:** Autenticação rápida via API do Google.
* **👤 Criação Automática de Perfil:** Se o usuário não existir, o sistema cria a conta usando os dados retornados (Nome, Email, Avatar).
* **🔒 Segurança OAuth 2.0:** Fluxo de autenticação baseado nos padrões oficiais da indústria.
* **🔄 Sincronização de Dados:** Atualização automática de informações básicas do perfil social.

---

## 🛠️ Configuração Passo a Passo

### 1. Requisitos no Google Cloud Console
Para que o login funcione, você precisa:
1. Criar um projeto no [Google Cloud Console](https://console.cloud.google.com/).
2. Configurar a **Tela de Consentimento OAuth**.
3. Criar **Credenciais de ID do Cliente OAuth 2.0**.
4. Definir a **URI de Redirecionamento Autorizada**:
   `https://seusite.com/auth/google/callback`

### 2. Configuração do `.env`
Adicione as chaves geradas no seu arquivo de ambiente:
```env
GOOGLE_CLIENT_ID=seu_client_id_aqui
GOOGLE_CLIENT_SECRET=seu_client_secret_aqui
GOOGLE_REDIRECT_URL=[https://seusite.com/auth/google/callback](https://seusite.com/auth/google/callback)
