FROM node:18-alpine
ENV NODE_ENV=production

WORKDIR /app

COPY ["./package.json", "./package-lock.json*", "./"]

RUN npm install --${NODE_ENV}
RUN npm install -g @adobe/jsonschema2md

CMD ["npm", "run", "generate"]
