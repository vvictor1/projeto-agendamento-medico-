FROM php:8.2-cli AS build

WORKDIR /app

COPY . .

FROM php:8.2-cli AS final

WORKDIR /app

COPY --from=build /app .

EXPOSE 8000

ENTRYPOINT ["php", "-S", "0.0.0.0:8000"]