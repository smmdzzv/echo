<template>
    <div class="container">
        <div class="row page-header">
            <h1>Исполнители</h1>
        </div>
        <div class="row">
            <artists-list></artists-list>
        </div>
    </div>
</template>

<script>
    import ArtistCard from "./ArtistCard";
    import AxiosCancellationMixin from "../../admin/mixins/AxiosCancellationMixin";
    import Pagination from "../../common/inputs/Pagination";
    import {fetchArtists} from "../../../api/mediaApi";
    import ArtistsList from "./ArtistsList";

    export default {
        name: "ArtistsView",
        mixins: [AxiosCancellationMixin],
        components: {ArtistsList, ArtistCard, Pagination},
        mounted() {
            if (this.providedArtists)
                this.artists = this.providedArtists;
            if (!this.noFetch)
                this.fetchArtists();
        },
        props: {
            providedArtists: null,
            noFetch: {
                type: Boolean
            }
        },
        data() {
            return {
                pagination: null,
                artists: [],
                paginationIntersObj: {
                    callback: this.paginationVisibilityChanged,
                    intersection: {
                        threshold: 0.3,
                        rootMargin: '200px',
                        throttle: 100
                    }
                }
            }
        },
        methods: {
            fetchArtists(page = 1) {
                this.isFetchingArtists = true;
                fetchArtists({order: 'latest', page: page, paginate: 15},
                    {cancelToken: this.getCancellationToken()})
                    .then(response => {
                        this.pagination = response;
                        this.artists.push(...response.data)
                    })
                    .finally(_ => {
                        this.isFetchingArtists = false;
                        this.$refs['artists-list-pagination'].loaded()
                    })
            },
            paginationVisibilityChanged(isVisible, entry) {
                let btn = entry.target.querySelector('button');
                if (isVisible && !this.isFetchingArtists && btn)
                    btn.click()
            }
        },
        watch: {
            providedArtists() {
                this.artists = this.providedArtists;
            }
        },
    }
</script>

<style scoped>

</style>
