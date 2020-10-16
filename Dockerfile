### STAGE 1: Build ###
FROM node:12.7-alpine AS build
WORKDIR /
COPY package.json package-lock.json ./
RUN npm install
COPY . .
RUN npm run build

### STAGE 2: Run ###
FROM nginx:1.17.1-alpine
#COPY ./nginx.conf /etc/nginx/nginx.conf
RUN ls -l
COPY --from=build /dist/crowdfunding-app  /usr/share/nginx/html
